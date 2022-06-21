<?php

namespace Parlament\Import\Geschaeft;

use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Type\DateTime\Date;
use Nemundo\Core\Type\DateTime\DateTime;
use Nemundo\Core\Type\Text\Text;
use Parlament\Data\Departement\Departement;
use Parlament\Data\Geschaeft\Geschaeft;
use Parlament\Data\GeschaeftKommission\GeschaeftKommission;
use Parlament\Data\GeschaeftText\GeschaeftText;
use Parlament\Data\GeschaeftTextTyp\GeschaeftTextTyp;
use Parlament\Data\GeschaeftThema\GeschaeftThema;
use Parlament\Import\Base\AbstractParlamentImport;

class GeschaeftDetailImport extends AbstractParlamentImport
{

    public function importData()
    {

    }


    public function importGeschaeft($geschaeftId)
    {

        $webService = 'affairs/' . $geschaeftId;
        $this->loadJsonList($webService);

    }


    protected function onJson($json)
    {

        $geschaeftId = $json['id'];

        $data = new Geschaeft();
        $data->updateOnDuplicate = true;
        $data->id = $geschaeftId;
        $data->kurzbezeichnung = $json['shortId'];
        $data->geschaeft = $json['title'];
        $data->geschaeftstypId = $json['affairType']['id'];

        if (isset($json['handling'])) {
            $data->sessionId = $json['handling']['session'];
        }

        $data->datumEinreichung=new Date($json['deposit']['date']);
        $data->geschaeftsstatusId = $json['state']['id'];
        $data->lastUpdate=new DateTime($json['updated']);
        $data->save();

        if (isset($json['additionalIndexing'])) {
            foreach ((new Text($json['additionalIndexing']))->split(';') as $thema) {

                $data = new GeschaeftThema();
                $data->ignoreIfExists = true;
                $data->geschaeftId = $geschaeftId;
                $data->themaId = $thema;
                $data->save();

            }
        }


        if (isset($json['drafts'])) {


            foreach ($json['drafts'][0]['preConsultations'] as $preConsultation) {

                $data=new GeschaeftKommission();
                $data->ignoreIfExists=true;
                $data->geschaeftId=$geschaeftId;
                $data->kommissionId= $preConsultation['committee']['id'];
                $data->save();

            }

            foreach ($json['drafts'][0]['relatedDepartments'] as $department) {

                $data = new Departement();
                $data->ignoreIfExists = true;
                $data->id = $department['id'];
                $data->departement = $department['name'];
                $data->abk = $department['abbreviation'];
                $data->save();

            }
        }


        foreach ($json['texts'] as $text) {

            $textTypId = $text['type']['id'];

            $data = new GeschaeftTextTyp();
            $data->ignoreIfExists = true;
            $data->id = $textTypId;
            $data->textTyp = $text['type']['name'];
            $data->save();

            $data = new GeschaeftText();
            $data->ignoreIfExists=true;
            $data->geschaeftId = $geschaeftId;
            $data->textTypId = $textTypId;
            $data->text = $text['value'];
            $data->save();

        }


    }

}