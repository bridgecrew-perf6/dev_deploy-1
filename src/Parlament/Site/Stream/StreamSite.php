<?php

namespace Parlament\Site\Stream;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Abstimmung\AbstimmungPage;
use Parlament\Page\Stream\StreamPage;

class StreamSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Stream';
        $this->url = 'stream';



    }

    public function loadContent()
    {
        (new StreamPage())->render();
    }
}