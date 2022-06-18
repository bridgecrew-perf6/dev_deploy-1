<?php

namespace Nemundo\Content\App\File\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\File\Content\Image\ImageContentType;
use Nemundo\Content\Service\AbstractContentServiceRequest;
use Nemundo\Core\Http\Request\File\FileRequest;

class ImagePostServiceRequest extends AbstractContentServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'image-post';

    }


    public function onRequest()
    {

        $contentType = new ImageContentType();
        //$contentType->file->fromFileRequest((new FileRequest('image')));
        $contentType->file->fromFileRequest((new FileRequest('file')));
        $contentType->saveType();

        //$this->saveTree($contentType);
        $this->sendContentOkStatus($contentType);

    }


}