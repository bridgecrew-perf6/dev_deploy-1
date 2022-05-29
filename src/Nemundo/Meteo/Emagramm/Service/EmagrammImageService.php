<?php

namespace Nemundo\Meteo\Emagramm\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Meteo\Emagramm\Data\Emagramm\EmagrammReader;

class EmagrammImageService extends AbstractServiceRequest
{

    protected function loadServiceRequest()
    {
        $this->serviceName = 'emagramm-image';
        $this->restrictedService = false;
    }


    public function onRequest()
    {

        $locationId = (new HttpRequest('location'))->getValue();

        $emagrammReader = new EmagrammReader();
        //$emagrammReader->limit = 5;
        $emagrammReader->limit = 1;
        $emagrammReader->filter->andEqual($emagrammReader->model->locationId, $locationId);
        $emagrammReader->addOrder($emagrammReader->model->dateTime, SortOrder::DESCENDING);
        foreach ($emagrammReader->getData() as $emagrammRow) {

            $data = [];
            $data['id'] = $emagrammRow->id;
            $data['image_url'] = $emagrammRow->image->getUrl();

            $this->addRow($data);

        }

    }

}