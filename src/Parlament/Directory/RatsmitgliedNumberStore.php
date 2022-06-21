<?php

namespace Parlament\Directory;

use Nemundo\Core\Store\AbstractKeyValueStore;
use Parlament\Data\Ratsmitglied\RatsmitgliedReader;

class RatsmitgliedNumberStore extends AbstractKeyValueStore
{

    protected function loadList()
    {

        $reader=new RatsmitgliedReader();
        foreach ($reader->getData() as $row) {

            $this->addValue($row->number,$row->id);

        }

    }

}