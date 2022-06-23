<?php

namespace Nemundo\Srf\Com\JavaScript;

use Nemundo\Com\JavaScript\Module\ModuleJavaScript;

class SrfExplorerModuleJavaScript extends ModuleJavaScript
{

    public function getContent()
    {

        $this->src = '/js/srf/srf_explorer.js';
        return parent::getContent();

    }

}