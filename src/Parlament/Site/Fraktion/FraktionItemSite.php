<?php

namespace Parlament\Site\Fraktion;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Fraktion\FraktionItemPage;
use Parlament\Page\Ratsmitglied\RatsmitgliedItemPage;
use Parlament\Page\RatsmitgliedPage;

class FraktionItemSite extends AbstractSite
{

    /** @var FraktionItemSite */
    public static $site;

    protected function loadSite()
    {

        //$this->title = 'Ratsmitglieder';
        //$this->title = 'National- und Ständerat';
        $this->url = 'fraktion-item';

        FraktionItemSite::$site=$this;

    }

    public function loadContent()
    {
        (new FraktionItemPage())->render();
    }
}