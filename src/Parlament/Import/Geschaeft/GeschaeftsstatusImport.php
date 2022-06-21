<?php

namespace Parlament\Import\Geschaeft;

use Parlament\Data\Geschaeftsstatus\Geschaeftsstatus;
use Parlament\Import\Base\AbstractParlamentImport;

class GeschaeftsstatusImport extends AbstractParlamentImport
{

    public function importData()
    {

        $this->loadJson('affairs/states');

    }


    protected function onJson($json)
    {

        $data = new Geschaeftsstatus();
        $data->updateOnDuplicate = true;
        $data->id = $json['id'];
        $data->geschaeftsstatus = $json['name'];
        $data->save();

    }


}