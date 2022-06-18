<?php

namespace Nemundo\Content\App\Camera\Service;


use Nemundo\Content\App\Camera\Content\Camera\CameraContentImport;
use Nemundo\Content\Service\AbstractContentPostServiceRequest;
use Nemundo\Core\Http\Request\File\FileRequest;

class CameraPostService extends AbstractContentPostServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'camera-post';

    }


    public function onRequest()
    {

        $fileRequest = new FileRequest('image');

        $import = new CameraContentImport();
        $import->fromFileRequest($fileRequest);

        $this->sendOkStatus();

    }

}