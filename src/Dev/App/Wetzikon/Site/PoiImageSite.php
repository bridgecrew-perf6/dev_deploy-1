<?php

namespace Dev\App\Wetzikon\Site;

use Nemundo\Web\Site\AbstractSite;
use Dev\App\Wetzikon\Page\PoiImagePage;

class PoiImageSite extends AbstractSite
{

    /**
     * @var PoiImageSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Image';
        $this->url = 'PoiImage';
        $this->menuActive = false;

        PoiImageSite::$site=$this;

    }

    public function loadContent()
    {
        (new PoiImagePage())->render();
    }
}