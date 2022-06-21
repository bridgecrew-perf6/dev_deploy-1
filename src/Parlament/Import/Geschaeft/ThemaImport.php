<?php

namespace Parlament\Import\Geschaeft;

use Parlament\Data\Geschaeftstyp\Geschaeftstyp;
use Parlament\Data\Thema\Thema;
use Parlament\Import\Base\AbstractParlamentImport;

class ThemaImport extends AbstractParlamentImport
{

    public function importData()
    {

        $this->loadJson('affairs/topics');

    }


    protected function onJson($json)
    {

        $data = new Thema();
        $data->updateOnDuplicate = true;
        $data->id = $json['id'];
        $data->thema = $json['name'];
        $data->save();

    }


}