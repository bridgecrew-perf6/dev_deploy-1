<?php

namespace Parlament\Site\Geschaeft;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Geschaeft\GeschaeftItemPage;

class GeschaeftItemSite extends AbstractSite
{

    /**
     * @var GeschaeftItemSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Geschäft';
        $this->url = 'geschaeft-item';

        GeschaeftItemSite::$site=$this;

    }

    public function loadContent()
    {
        (new GeschaeftItemPage())->render();
    }
}