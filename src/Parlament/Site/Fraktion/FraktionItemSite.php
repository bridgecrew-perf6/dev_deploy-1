<?php

namespace Parlament\Site\Fraktion;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Fraktion\FraktionItemPage;


class FraktionItemSite extends AbstractSite
{

    /** @var FraktionItemSite */
    public static $site;

    protected function loadSite()
    {

        $this->title = 'Fraktion Item';
        $this->url = 'fraktion-item';
        $this->menuActive = false;

        FraktionItemSite::$site = $this;

    }

    public function loadContent()
    {
        (new FraktionItemPage())->render();
    }
}