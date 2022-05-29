<?php

namespace Dev\Site;

use Dev\Page\HomePage;
use Dev\Page\TestPage;
use Nemundo\Web\Site\AbstractSite;

class TestSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Test';
        $this->url = 'test';
    }

    public function loadContent()
    {

        (new TestPage())->render();

    }
}