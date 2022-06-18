<?php


namespace Nemundo\Meteoschweiz\Service;


use Nemundo\App\WebService\Service\AbstractWordServiceRequest;
use Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationReader;

class StationWordService extends AbstractWordServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'meteoschweiz-station-word';

    }


    public function onRequest()
    {

        $reader = new MesswertStationReader();
        $reader->filter->andContainsLeft($reader->model->station, $this->getQuery());
        $reader->addOrder($reader->model->station);
        $reader->limit = 10;
        foreach ($reader->getData() as $stationRow) {
            $this->addWord($stationRow->id, $stationRow->station);
        }

    }


}