<?php

namespace Dev\App\Wetzikon\Site;

use Dev\App\Wetzikon\Data\Poi\PoiReader;
use Nemundo\Geo\Kml\Container\Placemark;
use Nemundo\Geo\Kml\Document\KmlDocument;
use Nemundo\Geo\Kml\Object\KmlMarker;
use Nemundo\Geo\Kml\Site\AbstractKmlSite;
use Nemundo\Web\Site\AbstractSite;
use Dev\App\Wetzikon\Page\PoiNewPage;

class PoiKmlSite extends AbstractKmlSite
{

    /**
     * @var PoiKmlSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Kml';
        $this->url = 'kml';
        PoiKmlSite::$site=$this;
    }

    public function loadContent()
    {

        $kml=new KmlDocument();


        $reader=new PoiReader();
        foreach ($reader->getData() as $poiRow) {

            $marker= new KmlMarker($kml);
            $marker->coordinate = $poiRow->coordinate;
            $marker->label=$poiRow->titel;

        }


        $kml->render();





    }
}