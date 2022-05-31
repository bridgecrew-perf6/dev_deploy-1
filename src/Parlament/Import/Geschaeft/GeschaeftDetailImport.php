<?php

namespace Parlament\Import\Geschaeft;

use Nemundo\Core\Type\Text\Text;
use Parlament\Data\Departement\Departement;
use Parlament\Data\Geschaeft\Geschaeft;
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

        $data->geschaeftsstatusId = $json['state']['id'];

        /*
                "state": {
                "id": 4,
            "name": "Von beiden Räten behandelt",


        "states": [
                {
                  "date": "/Date(1588716000000+0200)/",
                  "id": 24,
                  "name": "Im Rat noch nicht behandelt"
                },
                {
                  "date": "/Date(1652220000000+0200)/",
                  "id": 27,
                  "name": "Erledigt"
                }
              ],

          */


        $data->save();


        //$themaText = (new Text($json['additionalIndexing'])) "additionalIndexing": "44;2841;08",

        foreach ((new Text($json['additionalIndexing']))->split(';') as $thema) {

            $data = new GeschaeftThema();
            $data->ignoreIfExists = true;
            $data->geschaeftId = $geschaeftId;
            $data->themaId = $thema;
            $data->save();

        }


        foreach ($json['drafts'][0]['relatedDepartments'] as $department) {

            $data = new Departement();
            $data->ignoreIfExists=true;
            $data->id = $department['id'];
            $data->departement = $department['name'];
            $data->abk = $department['abbreviation'];
            $data->save();

        }


        /*"relatedDepartments": [
        {
            "abbreviation": "WBF",
          "id": 8,
          "name": "Departement für Wirtschaft, Bildung und Forschung",
          "leading": true
        }
      ],*/


        foreach ($json['texts'] as $text) {


            $textTypId = $text['type']['id'];

            $data = new GeschaeftTextTyp();
            $data->ignoreIfExists = true;
            $data->id = $textTypId;
            $data->textTyp = $text['type']['name'];
            $data->save();

            $data = new GeschaeftText();
            $data->geschaeftId = $geschaeftId;
            $data->textTypId = $textTypId;
            $data->text = $text['value'];
            $data->save();


        }


        /*
                "texts": [
            {
                "type": {
                "id": 6,
                "name": "Begründung"
              },
              "value": "<p>Die
        */


    }

}