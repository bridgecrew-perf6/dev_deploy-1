<?php

namespace Parlament\Directory;

use Parlament\Data\Rat\RatReader;

class RatDirectory extends AbstractKeyValue
{

    protected function loadList()
    {

        $reader = new RatReader();
        foreach ($reader->getData() as $row) {
            $this->addValue($row->type, $row->id);
        }

    }

}