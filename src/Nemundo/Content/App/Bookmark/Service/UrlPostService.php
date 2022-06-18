<?php

namespace Nemundo\Content\App\Bookmark\Service;


use Nemundo\Content\App\Bookmark\Content\UrlContentType;
use Nemundo\Content\Service\AbstractContentServiceRequest;
use Nemundo\Core\Http\Request\HttpRequest;

class UrlPostService extends AbstractContentServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'url-post';

    }


    public function onRequest()
    {

        $url = (new HttpRequest('url'))->getValue();

        $contentType = new UrlContentType();
        $contentType->fromUrl($url);
        /*$contentType = new UrlContentType();
        $contentType->url = (new HttpRequest('url'))->getValue();*/
        $contentType->saveType();

        $this->sendContentOkStatus($contentType);

    }

}