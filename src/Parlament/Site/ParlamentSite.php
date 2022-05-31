<?php

namespace Parlament\Site;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\ParlamentPage;
use Parlament\Site\Abstimmung\AbstimmungSite;
use Parlament\Site\Fraktion\FraktionSite;
use Parlament\Site\Geschaeft\GeschaeftSite;
use Parlament\Site\Kommission\KommissionSite;
use Parlament\Site\Ratsmitglied\RatsmitgliedSite;

class ParlamentSite extends AbstractSite
{
    protected function loadSite()
    {

        $this->title = 'Parlament';
        $this->url = 'parlament';

        new AbstimmungSite($this);
        new GeschaeftSite($this);
        new RatsmitgliedSite($this);
        new KommissionSite($this);
        new FraktionSite($this);


    }

    public function loadContent()
    {
        (new ParlamentPage())->render();
    }
}