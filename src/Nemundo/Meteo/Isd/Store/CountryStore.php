<?php

namespace Nemundo\Meteo\Isd\Store;

use Nemundo\Core\Store\AbstractKeyValueStore;
use Nemundo\Meteo\Isd\Data\Country\CountryReader;

class CountryStore extends AbstractKeyValueStore
{

    protected function loadList()
    {

        $this->defaultValue=0;

        $reader=new CountryReader();
        foreach ($reader->getData() as $row) {
            $this->addValue($row->countryCode, $row->id);
        }

    }

}