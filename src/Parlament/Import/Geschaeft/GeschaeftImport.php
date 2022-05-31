<?php

namespace Parlament\Import\Geschaeft;

use Parlament\Data\Geschaeft\Geschaeft;
use Parlament\Import\Base\AbstractPageParlamentImport;
use Parlament\Import\Base\AbstractParlamentImport;

class GeschaeftImport extends AbstractPageParlamentImport
{

    public $importDetail = false;

    public function importData()
    {

        $this->loadJson('affairs');

    }


    protected function onJson($json)
    {

        $geschaeftId = $json['id'];

        $data = new Geschaeft();
        $data->updateOnDuplicate = true;
        $data->id = $geschaeftId;
        $data->kurzbezeichnung = $json['shortId'];
        $data->save();

        if ($this->importDetail) {
            (new GeschaeftDetailImport())->importGeschaeft($geschaeftId);
        }

    }

}