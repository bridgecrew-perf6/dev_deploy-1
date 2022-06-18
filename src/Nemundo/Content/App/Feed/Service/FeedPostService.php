<?php


namespace Nemundo\Content\App\Feed\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Feed\Content\Feed\FeedContentType;
use Nemundo\Content\App\Feed\Data\Feed\FeedReader;
use Nemundo\Content\App\Feed\Import\FeedImport;
use Nemundo\Content\App\Feed\Parameter\FeedParameter;
use Nemundo\Content\App\Feed\Site\FeedSite;
use Nemundo\Content\Service\AbstractContentServiceRequest;
use Nemundo\Core\Http\Request\HttpRequest;

class FeedPostService extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName='feed-post';

    }

    public function onRequest()
    {

        //$feedUrl = (new HttpRequest('feed_url'))->getValue();


        $contentType = new FeedContentType();
        $contentType->feedUrl = (new HttpRequest('feed_url'))->getValue();
        $contentType->saveType();

        //$this->sendContentOkStatus($contentType);

        //(new FeedImport())->importFeed($feedUrl);


        $this->sendOkStatus();

    }

}