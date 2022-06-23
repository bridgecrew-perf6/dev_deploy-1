<?php

namespace Nemundo\Srf\Site;

use Nemundo\Srf\Page\SearchPage;
use Nemundo\Web\Site\AbstractSite;

class SearchSite extends AbstractSite
{

    /**
     * @var SearchSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Search';
        $this->url = 'search';
        $this->menuActive = false;

        SearchSite::$site = $this;

    }

    public function loadContent()
    {
        (new SearchPage())->render();
    }
}