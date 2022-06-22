<?php

namespace Nemundo\Srf\App\Livestream\Com\JavaScript;

use Nemundo\Com\JavaScript\Module\ModuleJavaScript;

class LivestreamModuleJavaScript extends ModuleJavaScript
{

    public function getContent()
    {

        $this->src = '/js/srf/srf_livestream.js';
        return parent::getContent();

    }

}