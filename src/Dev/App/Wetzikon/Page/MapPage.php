<?php

namespace Dev\App\Wetzikon\Page;

use Nemundo\Com\Package\PackageTrait;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Header\Link\StylesheetLink;
use Nemundo\Html\Script\JavaScript;
use Nemundo\Html\Script\JavaScriptType;

class MapPage extends AbstractTemplateDocument
{

    use PackageTrait;

    public function getContent()
    {


        $script = new JavaScript($this);
        $script->src = 'https://www.openlayers.org/api/OpenLayers.js';
        //$script->src = 'https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/build/ol.js';

        /*
        $style = new StylesheetLink($this);
        $style->href = 'https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/css/ol.css';
*/
/*        <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/build/ol.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/css/ol.css">
*/

        //$script->src = 'https://www.openlayers.org/api/OpenLayers.js';

        //$script->src = 'https://www.openlayers.org/api/OpenLayers.js';

        $script = new JavaScript($this);
        $script->type = JavaScriptType::MODULE;
        $script->src = '/js/dev/map.js';

        $div = new Div($this);
        $div->id = 'mapdiv';


        return parent::getContent();
    }
}