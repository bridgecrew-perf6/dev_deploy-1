<?php


namespace Nemundo\Bfs\Gemeinde\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;

use Nemundo\Bfs\Gemeinde\Data\Kanton\KantonReader;
use Nemundo\Core\Http\Request\HttpRequest;

class KantonService extends AbstractServiceRequest
{

    protected function loadServiceRequest()
    {
        $this->serviceName = 'gemeinde-kanton';
    }


    public function onRequest()
    {

        $reader = new KantonReader();
        $reader->addOrder($reader->model->kanton);
        foreach ($reader->getData() as $geoRow) {

            $data = [];
            $data['id'] = $geoRow->id;
            $data['kanton'] = $geoRow->kanton;

            $this->addRow($data);

        }


    }

}