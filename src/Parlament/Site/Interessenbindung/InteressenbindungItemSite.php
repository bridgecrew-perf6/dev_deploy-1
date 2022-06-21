<?php

namespace Parlament\Site\Interessenbindung;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Interessenbindung\InteressenbindungItemPage;
use Parlament\Page\Ratsmitglied\RatsmitgliedItemPage;

class InteressenbindungItemSite extends AbstractSite
{

    /** @var InteressenbindungItemSite */
    public static $site;

    protected function loadSite()
    {
        //$this->title = 'Ratsmitglieder';
        //$this->title = 'National- und Ständerat';
        $this->url = 'interessenbindung-item';
        $this->menuActive=false;

        InteressenbindungItemSite::$site=$this;

    }

    public function loadContent()
    {
        (new InteressenbindungItemPage())->render();
    }
}