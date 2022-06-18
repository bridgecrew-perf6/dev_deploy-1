<?php

namespace Dev\Com\JavaScript;

use Nemundo\Com\JavaScript\Module\ModuleJavaScript;

class DevModuleJavaScript extends ModuleJavaScript
{

    public function getContent()
    {

        $this->src = '/js/dev/dev.js';
        return parent::getContent();

    }

}