<?php


namespace Nemundo\Srf\Service;


use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Srf\Data\Show\ShowReader;

class ShowService extends AbstractListServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'srf-show';
    }


    public function onRequest()
    {

        $reader = new ShowReader();
        $reader->addOrder($reader->model->show);
        foreach ($reader->getData() as $showRow) {

            $row = [];
            $row['id'] = $showRow->id;
            $row['show'] = $showRow->show;
            $this->addRow($row);

        }

    }

}