<?php

namespace Nemundo\Content\App\File\Service\Image;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\File\Content\Image\ImageContentType;
use Nemundo\Content\App\File\Data\Image\ImageReader;
use Nemundo\Core\Http\Request\File\FileRequest;
use Nemundo\Core\Http\Request\HttpRequest;

class ImageDeleteAllServiceRequest extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'image-delete-all';

    }


    public function onRequest()
    {

        $reader = new ImageReader();
        foreach ($reader->getData() as $row) {

            (new ImageContentType($row->id))->deleteType();

        }



        $this->sendOkStatus();

    }


}