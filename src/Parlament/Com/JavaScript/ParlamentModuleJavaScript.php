<?php

namespace Parlament\Com\JavaScript;

use Nemundo\Com\JavaScript\Module\ModuleJavaScript;

class ParlamentModuleJavaScript extends ModuleJavaScript
{

    public function getContent()
    {
        $this->src = '/js/parlament/parlament.js';
        return parent::getContent();
    }

}