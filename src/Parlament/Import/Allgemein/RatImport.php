<?php

namespace Parlament\Import\Allgemein;


use Parlament\Data\Rat\Rat;
use Parlament\Import\Base\AbstractParlamentImport;

class RatImport extends AbstractParlamentImport
{

    public function importData()
    {

        $this->loadJson('councils');

    }


    protected function onJson($json)
    {

        $data = new Rat();
        $data->updateOnDuplicate = true;
        $data->id = $json['id'];
        $data->rat = $json['name'];
        $data->type= $json['type'];
        $data->save();

    }

}