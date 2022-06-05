<?php

namespace Dev\Template;

use Nemundo\Admin\Template\AdminTemplate;
use Nemundo\Com\JavaScript\Module\ModuleJavaScript;


class DevTemplate extends AdminTemplate
{


    protected function loadContainer()
    {

        parent::loadContainer();

        $module = new ModuleJavaScript();
        $module->src = '/js/dev/mobilemenu.js';

        $this->addCssUrl('/css/dev/style.css');

    }


    public function getContent()
    {

        $this->pageTitle = 'Dev';

        return parent::getContent();


    }


}