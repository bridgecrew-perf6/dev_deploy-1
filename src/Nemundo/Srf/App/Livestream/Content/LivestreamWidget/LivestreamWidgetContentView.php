<?php

namespace Nemundo\Srf\App\Livestream\Content\LivestreamWidget;

use Nemundo\Content\View\AbstractContentView;
use Nemundo\Html\Block\Div;
use Nemundo\Srf\App\Livestream\Com\JavaScript\LivestreamModuleJavaScript;

class LivestreamWidgetContentView extends AbstractContentView
{
    /**
     * @var LivestreamWidgetContentType
     */
    public $contentType;

    protected function loadView()
    {
        $this->viewName = 'default';
        $this->viewId = 'dda228e5-273e-4b78-888e-6f89339c209c';
        $this->defaultView = true;
    }

    public function getContent()
    {

        $div = new Div($this);
        $div->id = "srf-livestream";

        new LivestreamModuleJavaScript($this);

        return parent::getContent();

    }
}