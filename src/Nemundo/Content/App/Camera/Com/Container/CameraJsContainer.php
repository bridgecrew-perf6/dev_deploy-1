<?php


namespace Nemundo\Content\App\Camera\Com\Container;


use Nemundo\Admin\Template\BootstrapAdminTemplate;
use Nemundo\Com\Html\Header\LibraryHeader;
use Nemundo\Com\Package\PackageTrait;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Script\JavaScript;
use Nemundo\Html\Script\JavaScriptType;
use Nemundo\Web\WebConfig;

class CameraJsContainer extends Div
{

    use PackageTrait;

    public function getContent()
    {

        LibraryHeader::addCssUrl('/css/table.css');


        $this->id = 'camera_container';

        $script = new JavaScript($this);
        $script->type = JavaScriptType::MODULE;
        $script->defer = true;
        $script->src = '/js/content_app/Camera/Camera.js';

        return parent::getContent();

    }

}