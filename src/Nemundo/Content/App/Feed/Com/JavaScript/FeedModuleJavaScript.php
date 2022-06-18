<?php

namespace Nemundo\Content\App\Feed\Com\JavaScript;

use Nemundo\Com\JavaScript\Module\ModuleJavaScript;

class FeedModuleJavaScript extends ModuleJavaScript
{

    public function getContent()
    {

        $this->src='/js/content_app/Feed/feed_module.js';

        return parent::getContent();
    }


}