<?php

namespace Nemundo\Srf\App\Livestream\Site;

use Nemundo\Srf\App\Livestream\Page\LivestreamPage;
use Nemundo\Web\Site\AbstractSite;

class LivestreamSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'SRF Livestream';
        $this->url = 'srf-Livestream';
    }

    public function loadContent()
    {
        (new LivestreamPage())->render();
    }
}