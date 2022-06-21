<?php

namespace Parlament\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Parlament\Reader\FraktionDataReader;

class FraktionService extends AbstractServiceRequest
{
    protected function loadService()
    {
        $this->serviceName = 'parlament-fraktion';
    }

    public function onRequest()
    {

        $reader = new FraktionDataReader();
        foreach ($reader->getData() as $row) {

            $data = [];
            $data['id'] = $row->id;
            $data['fraktion'] = $row->fraktion;

            $this->addRow($data);

        }

    }
}