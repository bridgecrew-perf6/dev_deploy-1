<?php

namespace Dev\App\Wetzikon\Site;

use Nemundo\Web\Site\AbstractSite;
use Dev\App\Wetzikon\Page\PoiNewPage;

class PoiNewSite extends AbstractSite
{

    /**
     * @var PoiNewSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Neuer Poi';
        $this->url = 'PoiNew';
        $this->menuActive = false;
        PoiNewSite::$site=$this;
    }

    public function loadContent()
    {
        (new PoiNewPage())->render();
    }
}