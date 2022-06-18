<?php


namespace Nemundo\Meteoschweiz\Site\Json;


use Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationReader;
use Nemundo\Web\Site\AbstractJsonSite;



// SearchSite
class StationJsonSite extends AbstractJsonSite
{


    protected function loadSite()
    {

        $this->url='station-json';

    }


    protected function loadJson()
    {

        $reader = new MesswertStationReader();
        $reader->addOrder($reader->model->station);
        foreach ($reader->getData() as $stationRow) {

            $data=[];
            $data['id']= $stationRow->id;
            $data['station_code']= $stationRow->stationCode;
            $data['station']= $stationRow->station;

            $this->addJsonRow($data);

        }

    }

}