<?php


namespace Nemundo\Bfs\Abstimmung\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Bfs\Abstimmung\Data\Abstimmung\AbstimmungReader;
use Nemundo\Bfs\Abstimmung\Data\Geo\GeoReader;
use Nemundo\Core\Http\Request\HttpRequest;

class GeoService extends AbstractServiceRequest
{

    protected function loadServiceRequest()
    {
        $this->serviceName = 'abstimmung-geo';
    }


    public function onRequest()
    {

        //$geoLevel=4;

        $geoLevel = (new HttpRequest('level'))->getValue();

        $reader = new GeoReader();
        $reader->filter->andEqual($reader->model->geoLevelId, $geoLevel);

        $reader->addOrder($reader->model->geo);
        $reader->limit = 100;
        foreach ($reader->getData() as $geoRow) {

            $data = [];
            $data['id'] = $geoRow->id;
            $data['geo'] = $geoRow->geo;

            $this->addRow($data);

        }


    }

}