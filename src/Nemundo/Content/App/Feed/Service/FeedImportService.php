<?php


namespace Nemundo\Content\App\Feed\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Feed\Import\FeedImport;

class FeedImportService extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'feed-import';

    }

    public function onRequest()
    {

        (new FeedImport())->importFeedList();

        $this->sendOkStatus();

    }

}