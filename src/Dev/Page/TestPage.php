<?php

namespace Dev\Page;

use Dev\Com\JavaScript\DevModuleJavaScript;
use Nemundo\Admin\Com\ListBox\AdminListBox;
use Nemundo\Admin\Com\ListBox\AdminTextBox;
use Nemundo\Admin\Com\Title\AdminTitle;
use Nemundo\Com\JavaScript\Module\ModuleJavaScript;
use Nemundo\Com\Package\PackageTrait;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Html\Script\JavaScript;
use Nemundo\Html\Script\JavaScriptType;


class TestPage extends AbstractTemplateDocument
{

    use PackageTrait;

    public function getContent()
    {


        /*$js = new ModuleJavaScript($this);
        $js->src = '/js/dev/map.js';*/

        /*$script=new JavaScript($this);
        $script->src='https://www.openlayers.org/api/OpenLayers.js';


        $script=new JavaScript($this);
        $script->type=JavaScriptType::MODULE;
        $script->src='/js/dev/map.js';




        $div = new Div($this);

        $div->id = 'mapdiv';*/


        return parent::getContent();

    }

}