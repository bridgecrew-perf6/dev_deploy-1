<?php

namespace Parlament\Directory;

use Parlament\Data\Fraktion\FraktionReader;

class FraktionKeyValue extends AbstractKeyValue
{

    protected function loadList()
    {


        $reader= new FraktionReader();
        foreach ($reader->getData() as $row) {
            $this->addValue($row->abkuerzung,$row->id);
        }


    }

}