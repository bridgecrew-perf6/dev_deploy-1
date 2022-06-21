<?php

namespace Parlament\Import\Allgemein;

use Nemundo\Core\Type\DateTime\Date;
use Parlament\Data\Legislatur\Legislatur;
use Parlament\Import\Base\AbstractParlamentImport;

class LegislaturImport extends AbstractParlamentImport
{

    public function importData()
    {

        $this->loadJson('legislativeperiods');

    }


    protected function onJson($json)
    {

        $data = new Legislatur();
        $data->updateOnDuplicate = true;
        $data->code = $json['code'];
        $data->legislatur = $json['name'];
        $data->von = (new Date($json['from']));
        $data->bis = (new Date($json['to']));
        $data->save();

    }

}