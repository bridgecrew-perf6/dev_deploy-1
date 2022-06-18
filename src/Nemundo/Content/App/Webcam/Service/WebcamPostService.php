<?php

namespace Nemundo\Content\App\Webcam\Service;


use Nemundo\Content\App\Webcam\Content\Webcam\WebcamContentType;
use Nemundo\Content\Service\AbstractContentServiceRequest;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Core\Type\Geo\GeoCoordinateAltitude;

class WebcamPostService extends AbstractContentServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'webcam-post';

    }


    public function onRequest()
    {

        $contentType = new WebcamContentType();
        $contentType->webcam = (new HttpRequest('webcam'))->getValue();
        $contentType->imageUrl = (new HttpRequest('image_url'))->getValue();
        $contentType->geoCoordinate = new GeoCoordinateAltitude();
        $contentType->saveType();

        $this->sendContentOkStatus($contentType);

    }

}