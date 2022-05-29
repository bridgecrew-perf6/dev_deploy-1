<?php

namespace Nemundo\Meteo\Emagramm\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Meteo\Emagramm\Data\Location\LocationReader;

class EmagrammLocationService extends AbstractServiceRequest
{

    protected function loadServiceRequest()
    {
        $this->serviceName = 'emagramm-location';
        $this->restrictedService = false;
    }


    public function onRequest()
    {

        $reader = new LocationReader();
        foreach ($reader->getData() as $locationRow) {

            $data = [];
            $data['id'] = $locationRow->id;
            $data['location'] = $locationRow->location;

            $this->addRow($data);

        }

    }

}