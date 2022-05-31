<?php

namespace Parlament\Import\Geschaeft;

use Parlament\Data\Geschaeftstyp\Geschaeftstyp;
use Parlament\Import\Base\AbstractParlamentImport;

class GeschaeftstypImport extends AbstractParlamentImport
{

    public function importData()
    {

        $this->loadJson('affairs/types');

    }


    protected function onJson($json)
    {

        $data = new Geschaeftstyp();
        $data->updateOnDuplicate = true;
        $data->id = $json['id'];
        $data->geschaeftstyp = $json['name'];
        $data->save();

    }


}