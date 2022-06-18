<?php


namespace Nemundo\Content\App\Webcam\Service;


use Nemundo\Content\App\Webcam\Content\Webcam\WebcamContentType;
use Nemundo\Content\Service\AbstractContentServiceRequest;

class WebcamItemService extends AbstractContentServiceRequest
{

    protected function loadService()
    {
        $this->serviceName='webcam-item';
        // TODO: Implement loadServiceRequest() method.
    }


    public function onRequest()
    {

        $contentType=new WebcamContentType();
        



        // TODO: Implement onRequest() method.
    }

}