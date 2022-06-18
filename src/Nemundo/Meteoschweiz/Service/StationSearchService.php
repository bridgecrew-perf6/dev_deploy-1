<?php

namespace Nemundo\Meteoschweiz\Service;


use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationPaginationReader;

// StationSearchService
class StationSearchService extends AbstractListServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'meteoschweiz-station-search';

    }


    public function onRequest()
    {

        $reader = new MesswertStationPaginationReader();

        $request = new HttpRequest('q');
        if ($request->hasValue()) {
            $reader->filter->andContainsLeft($reader->model->station, $request->getValue());
        }


        switch ($this->getSortingField()) {

            case 'station':
                $reader->addOrder($reader->model->station,$this->getSortingOrder());
                break;

            case 'station_code':
                $reader->addOrder($reader->model->stationCode,$this->getSortingOrder());
                break;

            case 'altitude':
                $reader->addOrder($reader->model->geoCoordinate->altitude,$this->getSortingOrder());
                break;



            default:


        }



        $reader->currentPage = $this->getCurrentPage();
        $reader->paginationLimit = $this->getPaginationLimit();


        foreach ($reader->getData() as $stationRow) {

            $data = [];
            $data['id'] = $stationRow->id;
            $data['station'] = $stationRow->station;
            $data['station_code'] = $stationRow->stationCode;
            $data['latitude'] = $stationRow->geoCoordinate->latitude;
            $data['longitude'] = $stationRow->geoCoordinate->longitude;
            $data['altitude'] = $stationRow->geoCoordinate->altitude;

            $this->addRow($data);

        }

    }


}