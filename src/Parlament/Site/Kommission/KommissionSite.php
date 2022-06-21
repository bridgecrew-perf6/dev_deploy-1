<?php

namespace Parlament\Site\Kommission;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Kommission\KommissionPage;


class KommissionSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Kommission';
        $this->url = 'kommission';
    }

    public function loadContent()
    {
        (new KommissionPage())->render();

    }
}