<?php


namespace Nemundo\Meteo\MeteoschweizAllgemeineLage\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Meteo\MeteoschweizAllgemeineLage\Data\AllgemeineLage\AllgemeineLageReader;

class AllgemeineLageService extends AbstractServiceRequest
{

    protected function loadServiceRequest()
    {
        $this->serviceName = 'meteoschweiz-allgemeinelage';
    }


    public function onRequest()
    {

        $reader = new AllgemeineLageReader();
        $reader->addOrder($reader->model->id, SortOrder::DESCENDING);
        $reader->limit = 1;
        foreach ($reader->getData() as $allgemeineLageRow) {

            $data = [];
            $data['datum'] = $allgemeineLageRow->datum->getIsoDateTime();
            $data['allgemeine_lage'] = $allgemeineLageRow->allgemeineLage;

            $this->addRow($data);

        }

    }

}