<?php

namespace Nemundo\Content\App\File\Service;


class FileUploadServiceRequest extends AbstractFileUploadServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'file-upload';

    }


    public function onRequest()
    {

        $this->saveFileRequest();

    }

}