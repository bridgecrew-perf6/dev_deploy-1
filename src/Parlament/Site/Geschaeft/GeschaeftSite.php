<?php

namespace Parlament\Site\Geschaeft;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Geschaeft\GeschaeftPage;

class GeschaeftSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Geschäft';
        $this->url = 'geschaeft';

        new GeschaeftItemSite($this);

    }

    public function loadContent()
    {
        (new GeschaeftPage())->render();
    }
}