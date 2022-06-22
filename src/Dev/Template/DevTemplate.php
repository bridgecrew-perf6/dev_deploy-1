<?php

namespace Dev\Template;

use Nemundo\Admin\Template\NavbarAdminTemplate;
use Nemundo\Com\JavaScript\Module\ModuleJavaScript;
use Nemundo\Html\Block\Div;


class DevTemplate extends NavbarAdminTemplate
{

    public function getContent()
    {

        $this->pageTitle = 'Dev (Test)';
        return parent::getContent();

    }


}