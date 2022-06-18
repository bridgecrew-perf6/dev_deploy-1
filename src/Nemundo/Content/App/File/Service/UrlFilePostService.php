<?php

namespace Nemundo\Content\App\File\Service;

use Nemundo\Content\App\File\Content\Upload\UploadFile;
use Nemundo\Content\Service\AbstractContentServiceRequest;
use Nemundo\Core\Http\Request\File\FileRequest;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Core\System\PhpConfig;

// FileUrlPostService
class UrlFilePostService extends AbstractContentServiceRequest
{


    protected function loadService()
    {
        $this->serviceName='file-url-post';
        // TODO: Implement loadServiceRequest() method.
    }


    public function onRequest()
    {

        (new PhpConfig())->setTimeLimit(180);

        //$fileRequest = new FileRequest('file');

        $url=(new HttpRequest('url'))->getValue();

        $upload = new UploadFile();
        $upload->file->fromUrl($url);
        $type = $upload->uploadFile();

        $this->sendContentOkStatus($type);

        return $type;

    }

}