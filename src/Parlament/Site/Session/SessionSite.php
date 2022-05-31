<?php

namespace Parlament\Site\Session;

use Nemundo\Web\Site\AbstractSite;
use Parlament\Page\Session\SessionPage;

class SessionSite extends AbstractSite
{

    protected function loadSite()
    {

        $this->title = 'Session';
        $this->url = 'session';

    }

    public function loadContent()
    {

        (new SessionPage())->render();

    }
}