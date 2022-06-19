<?php

namespace Nemundo\Srf\App\Livestream\Service;


use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Srf\App\Livestream\Data\RadioLivestream\RadioLivestreamReader;
use Nemundo\Srf\Data\Show\ShowReader;

class LivestreamService extends AbstractListServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'srf-livestream-radio';
    }


    public function onRequest()
    {

        $reader = new RadioLivestreamReader();

        $request=new HttpRequest('id');
        if ($request->hasValue()) {
            $reader->filter->andEqual($reader->model->id,$request->getValue());
        }

        $reader->addOrder($reader->model->livestream);
        foreach ($reader->getData() as $showRow) {

            $row = [];
            $row['id'] = $showRow->id;
            $row['livestream'] = $showRow->livestream;
            $row['urn'] = $showRow->urn;
            $this->addRow($row);

        }

    }

}