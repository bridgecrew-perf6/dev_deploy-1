<?php

namespace Dev\App\Wetzikon\Site;

use Dev\App\Wetzikon\Data\Poi\PoiDelete;
use Dev\App\Wetzikon\Data\PoiBild\PoiBildDelete;
use Dev\App\Wetzikon\Parameter\PoiImageParameter;
use Dev\App\Wetzikon\Parameter\PoiParameter;
use Nemundo\Admin\Site\Icon\AbstractAdminDeleteIconSite;
use Nemundo\Core\Http\Url\UrlReferer;
use Nemundo\Web\Site\AbstractSite;


class PoiImageDeleteSite extends AbstractAdminDeleteIconSite
{

    /**
     * @var PoiImageDeleteSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'PoiDelete';
        $this->url = 'PoiDelete';

        PoiImageDeleteSite::$site=$this;

    }

    public function loadContent()
    {

        (new PoiBildDelete())->deleteById((new PoiImageParameter())->getValue());
        (new UrlReferer())->redirect();

    }
}