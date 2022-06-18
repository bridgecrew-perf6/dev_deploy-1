<?php

namespace Nemundo\Content\App\ImageTimeline\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\ImageTimeline\Content\ImageTimeline\ImageTimelineContentType;
use Nemundo\Core\Http\Request\HttpRequest;

class ImageTimelineDeleteService extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'imagetimeline-delete';

    }


    public function onRequest()
    {

        $id = (new HttpRequest('id'))->getValue();
        (new ImageTimelineContentType($id))->deleteType();

        $this->sendOkStatus();

    }

}