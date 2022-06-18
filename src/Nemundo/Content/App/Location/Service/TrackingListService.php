<?php


namespace Nemundo\Content\App\Location\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;

class TrackingListService extends AbstractServiceRequest
{

    protected function loadService()
    {
     $this->serviceName='tracking-list';
    }


    public function onRequest()
    {

    }

}