<?php

namespace Dev\Site;

use Dev\Page\HomePage;
use Nemundo\Web\Site\AbstractSite;
use Parlament\Site\ParlamentSite;

class HomeSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Home';
        $this->url = '';
        $this->menuActive=false;
    }

    public function loadContent()
    {

        //(new ParlamentSite())->redirect();

        (new HomePage())->render();

    }
}