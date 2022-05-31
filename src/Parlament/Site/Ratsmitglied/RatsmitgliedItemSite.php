<?php

namespace Parlament\Site\Ratsmitglied;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Ratsmitglied\RatsmitgliedItemPage;
use Parlament\Page\RatsmitgliedPage;

class RatsmitgliedItemSite extends AbstractSite
{

    /** @var RatsmitgliedItemSite */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Ratsmitglieder';
        //$this->title = 'National- und Ständerat';
        $this->url = 'ratsmitglieder-item';

        RatsmitgliedItemSite::$site=$this;

    }

    public function loadContent()
    {
        (new RatsmitgliedItemPage())->render();
    }
}