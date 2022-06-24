<?php

namespace Dev\App\Wetzikon\Site;

use Dev\App\Wetzikon\Data\Poi\PoiDelete;
use Dev\App\Wetzikon\Parameter\PoiParameter;
use Nemundo\Admin\Site\Icon\AbstractAdminDeleteIconSite;
use Nemundo\Core\Http\Url\UrlReferer;
use Nemundo\Web\Site\AbstractSite;


class PoiDeleteSite extends AbstractAdminDeleteIconSite
{

    /**
     * @var PoiDeleteSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'PoiDelete';
        $this->url = 'PoiDelete';

        PoiDeleteSite::$site=$this;

    }

    public function loadContent()
    {

        (new PoiDelete())->deleteById((new PoiParameter())->getValue());
        (new UrlReferer())->redirect();

    }
}