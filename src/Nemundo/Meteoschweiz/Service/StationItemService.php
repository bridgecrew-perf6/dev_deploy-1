<?php


namespace Nemundo\Meteoschweiz\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationReader;

class StationItemService extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'meteoschweiz-station-item';

    }


    public function onRequest()
    {

        $dataId = (new HttpRequest('data_id'))->getValue();

        $reader = new MesswertStationReader();
        $reader->filter->andEqual($reader->model->id, $dataId);
        $reader->addOrder($reader->model->station);

        $join = new \Nemundo\Model\Join\ModelJoin($reader);
        $join->externalModel = new \Nemundo\Content\Data\Content\ContentModel();
        $join->type = $reader->model->id;
        $join->externalType= $join->externalModel->dataId;

        foreach ($reader->getData() as $stationRow) {

            $data = [];
            $data['id'] = $stationRow->id;
            $data['station'] = $stationRow->station;
            $data['station_code'] = $stationRow->stationCode;
            $data['latitude'] = $stationRow->geoCoordinate->latitude;
            $data['longitude'] = $stationRow->geoCoordinate->longitude;
            $data['content_id']=$stationRow->getModelValue($join->externalModel->id);

            $this->addRow($data);

        }

    }


}