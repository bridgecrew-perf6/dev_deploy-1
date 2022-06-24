<?php
namespace Dev\App\Wetzikon\Page;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Script\JavaScript;
use Nemundo\Html\Script\JavaScriptType;

class MapPage extends AbstractTemplateDocument {
public function getContent() {


    $script=new JavaScript($this);
    $script->src='http://www.openlayers.org/api/OpenLayers.js';


    $script=new JavaScript($this);
    $script->type=JavaScriptType::MODULE;
    $script->src='/js/dev/map.js';




    $div = new Div($this);

    $div->id = 'mapdiv';


    return parent::getContent();
}
}