<?php

namespace Dev\App\Wetzikon\Site;

use Nemundo\Admin\Site\Icon\AbstractAdminIconSite;
use Nemundo\Web\Site\AbstractSite;
use Dev\App\Wetzikon\Page\PoiImagePage;

class PoiImageSite extends AbstractAdminIconSite
{

    /**
     * @var PoiImageSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Image';
        $this->url = 'PoiImage';
        $this->icon->icon='image';
        $this->menuActive = false;

        new PoiImageDeleteSite($this);

        PoiImageSite::$site=$this;

    }

    public function loadContent()
    {
        (new PoiImagePage())->render();
    }
}