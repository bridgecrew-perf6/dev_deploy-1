<?php

namespace Parlament\Site\Fraktion;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Fraktion\FraktionPage;

class FraktionSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Fraktion';
        $this->url = 'fraktion';

        new FraktionItemSite($this);

    }

    public function loadContent()
    {
        (new FraktionPage())->render();
    }
}