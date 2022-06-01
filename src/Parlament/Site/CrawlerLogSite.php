<?php

namespace Parlament\Site;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\CrawlerLogPage;

class CrawlerLogSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Crawler Log';
        $this->url = 'crawler-log';
    }

    public function loadContent()
    {
        (new CrawlerLogPage())->render();
    }
}