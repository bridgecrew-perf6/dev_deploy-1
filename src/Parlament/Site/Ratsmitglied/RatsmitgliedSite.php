<?php

namespace Parlament\Site\Ratsmitglied;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Ratsmitglied\RatsmitgliedPage;
use Parlament\Site\Ratsmitglied\RatsmitgliedItemSite;

class RatsmitgliedSite extends AbstractSite
{

    /** @var RatsmitgliedSite */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Ratsmitglieder';
        //$this->title = 'National- und Ständerat';
        $this->url = 'ratsmitglieder';

        new RatsmitgliedItemSite($this);

        RatsmitgliedSite::$site=$this;

    }

    public function loadContent()
    {
        (new RatsmitgliedPage())->render();
    }
}