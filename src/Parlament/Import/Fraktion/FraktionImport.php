<?php

namespace Parlament\Import\Fraktion;

use Parlament\Data\Fraktion\Fraktion;
use Parlament\Import\Base\AbstractParlamentImport;

class FraktionImport extends AbstractParlamentImport
{

    public function importData()
    {

        $this->loadJson('factions');

    }


    protected function onJson($json)
    {

        $data = new Fraktion();
        $data->updateOnDuplicate = true;
        $data->id = $json['id'];
        $data->aktiv=true;
        $data->fraktion = $json['name'];
        $data->abkuerzung=$json['abbreviation'];
        $data->save();

    }

}