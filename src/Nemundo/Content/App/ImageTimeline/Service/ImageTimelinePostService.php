<?php

namespace Nemundo\Content\App\ImageTimeline\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\ImageTimeline\Content\ImageTimeline\ImageTimelineContentType;
use Nemundo\Core\Http\Request\HttpRequest;

class ImageTimelinePostService extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'imagetimeline-post';

    }


    public function onRequest()
    {

        $contentType = new ImageTimelineContentType();
        $contentType->timeline = (new HttpRequest('timeline'))->getValue();
        $contentType->imageUrl = (new HttpRequest('image_url'))->getValue();
        $contentType->crawling = true;
        $contentType->saveType();

        $this->sendOkStatus();

    }

}