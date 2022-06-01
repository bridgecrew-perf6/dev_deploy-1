<?php

namespace Parlament\Site\Fraktion;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Fraktion\FraktionPage;

class FraktionSite extends AbstractSite
{

    /**
     * @var FraktionSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Fraktion';
        $this->url = 'fraktion';

        new FraktionItemSite($this);

        FraktionSite::$site=$this;

    }

    public function loadContent()
    {
        (new FraktionPage())->render();
    }
}