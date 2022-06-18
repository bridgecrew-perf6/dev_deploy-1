<?php


namespace Nemundo\Content\App\Location\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Location\Data\Tracking\Tracking;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Core\Type\DateTime\DateTime;

class TrackingPostService extends AbstractServiceRequest
{

    protected function loadService()
    {
     $this->serviceName='tracking-post';
    }


    public function onRequest()
    {


        $data=new Tracking();
        $data->dateTime = (new DateTime())->setNow();
        $data->geoCoordinate->latitude = (new HttpRequest('lat'))->getValue();
        $data->geoCoordinate->longitude = (new HttpRequest('lon'))->getValue();
        $data->save();

        $this->sendOkStatus();




    }

}