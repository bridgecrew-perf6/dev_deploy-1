<?php

namespace Dev\App\Wetzikon\Site;

use Nemundo\Web\Site\AbstractSite;
use Dev\App\Wetzikon\Page\PoiPage;

class PoiSite extends AbstractSite
{

    /**
     * @var PoiSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Admin';
        $this->url = 'poi';

        new PoiNewSite($this);
        new PoiEditSite($this);
        new PoiDeleteSite($this);
        new PoiImageSite($this);

        PoiSite::$site=$this;

    }

    public function loadContent()
    {
        (new PoiPage())->render();
    }
}