<?php

namespace Parlament\Import\Geschaeft;

use Parlament\Data\Geschaeft\Geschaeft;
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

        $data = new Geschaeft();
        $data->updateOnDuplicate = true;
        $data->id = $json['id'];
        $data->kurzbezeichnung = $json['shortId'];
        $data->geschaeft = $json['title'];
        $data->geschaeftstypId = $json['affairType']['id'];

        if (isset($json['handling'])) {
            $data->sessionId = $json['handling']['session'];
        }

        $data->save();

    }

}