<?php

namespace Nemundo\Bfs\Abstimmung\Com\JavaScript;

use Nemundo\Com\JavaScript\Module\ModuleJavaScript;

class AbstimmungModuleJavaScript extends ModuleJavaScript
{

    public function getContent()
    {

        $this->src = '/js/bfs/Abstimmung/abstimmung_module.js';
        return parent::getContent();

    }

}