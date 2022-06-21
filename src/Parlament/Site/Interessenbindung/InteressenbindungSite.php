<?php

namespace Parlament\Site\Interessenbindung;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Interessenbindung\InteressenbindungItemPage;
use Parlament\Page\Interessenbindung\InteressenbindungPage;

class InteressenbindungSite extends AbstractSite
{

    /** @var InteressenbindungSite */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Interessenbindungen';
        //$this->title = 'National- und Ständerat';
        $this->url = 'interessenbindungen';

        new InteressenbindungItemSite($this);

        InteressenbindungSite::$site = $this;

    }

    public function loadContent()
    {
        (new InteressenbindungPage())->render();
    }
}