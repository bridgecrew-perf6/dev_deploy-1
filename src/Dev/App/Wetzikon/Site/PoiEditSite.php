<?php

namespace Dev\App\Wetzikon\Site;

use Nemundo\Admin\Site\Icon\AbstractAdminEditIconSite;
use Nemundo\Web\Site\AbstractSite;
use Dev\App\Wetzikon\Page\PoiEditPage;

class PoiEditSite extends AbstractAdminEditIconSite
{

    /**
     * @var PoiEditSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'PoiEdit';
        $this->url = 'PoiEdit';

        PoiEditSite::$site=$this;

    }

    public function loadContent()
    {
        (new PoiEditPage())->render();
    }
}