<?php

namespace Nemundo\Content\App\File\Service;

use Nemundo\Content\App\File\Content\Upload\UploadFile;
use Nemundo\Content\Service\AbstractContentServiceRequest;
use Nemundo\Core\Http\Request\File\FileRequest;
use Nemundo\Core\System\PhpConfig;

abstract class AbstractFileUploadServiceRequest extends AbstractContentServiceRequest
{

    protected function saveFileRequest() {

        (new PhpConfig())->setTimeLimit(180);

        $fileRequest = new FileRequest('file');

        $upload = new UploadFile();
        $upload->file->fromFileRequest($fileRequest);
        $type = $upload->uploadFile();

        $this->sendContentOkStatus($type);

        return $type;

    }

}