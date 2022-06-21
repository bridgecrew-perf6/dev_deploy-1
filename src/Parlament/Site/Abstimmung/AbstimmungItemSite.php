<?php

namespace Parlament\Site\Abstimmung;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Abstimmung\AbstimmungItemPage;

class AbstimmungItemSite extends AbstractSite
{

    /**
     * @var AbstimmungItemSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'AbstimmungItem';
        $this->url = 'abstimmung-item';
        $this->menuActive = false;

        AbstimmungItemSite::$site = $this;

    }

    public function loadContent()
    {
        (new AbstimmungItemPage())->render();
    }
}