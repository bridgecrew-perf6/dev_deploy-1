<?php


namespace Nemundo\Content\App\Location\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Location\Data\Tracking\Tracking;
use Nemundo\Content\App\Location\Data\Tracking\TrackingDelete;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Core\Type\DateTime\DateTime;

class TrackingDeleteService extends AbstractServiceRequest
{

    protected function loadService()
    {
     $this->serviceName='tracking-delete';
    }


    public function onRequest()
    {


        (new TrackingDelete())->delete();
        $this->sendOkStatus();




    }

}