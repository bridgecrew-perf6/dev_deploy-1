<?php

namespace Parlament\Site\Abstimmung;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Abstimmung\AbstimmungPage;

class AbstimmungSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Abstimmung';
        $this->url = 'abstimmung';

        new AbstimmungItemSite($this);

    }

    public function loadContent()
    {
        (new AbstimmungPage())->render();
    }
}