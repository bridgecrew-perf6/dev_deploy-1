<?php

namespace Dev\App\Wetzikon\Site;

use Nemundo\Web\Site\AbstractSite;
use Dev\App\Wetzikon\Page\MapPage;

class MapSite extends AbstractSite
{

    /**
     * @var MapSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Map';
        $this->url = 'map';
        $this->menuActive=false;
        MapSite::$site=$this;
    }

    public function loadContent()
    {
        (new MapPage())->render();
    }
}