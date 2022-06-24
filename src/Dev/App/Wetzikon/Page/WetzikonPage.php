<?php

namespace Dev\App\Wetzikon\Page;

use Dev\App\Wetzikon\Data\Poi\PoiReader;
use Dev\App\Wetzikon\Data\PoiBild\PoiBildReader;
use Dev\App\Wetzikon\Site\PoiKmlSite;
use Dev\App\Wetzikon\Site\PoiNewSite;
use Nemundo\Admin\Com\Button\AdminSiteButton;
use Nemundo\Admin\Com\Image\AdminImage;
use Nemundo\Admin\Com\Item\AdminItemContainer;
use Nemundo\Admin\Com\Item\AdminItemText;
use Nemundo\Admin\Com\Title\AdminTitle;
use Nemundo\Com\Template\AbstractTemplateDocument;

class WetzikonPage extends AbstractTemplateDocument
{


    public function getContent()
    {

        /* $btn=new AdminSiteButton($this);
         $btn->site=PoiNewSite::$site;*/





        $btn = new AdminSiteButton($this);
        $btn->site = PoiKmlSite::$site;


        $reader = new PoiReader();
        foreach ($reader->getData() as $poiRow) {

            $container = new AdminItemContainer($this);

            $title = new AdminTitle($container);
            $title->content = $poiRow->titel;

            $text = new AdminItemText($container);
            $text->content = $poiRow->text;

            $imageReader = new PoiBildReader();
            $imageReader->filter->andEqual($imageReader->model->poiId, $poiRow->id);
            foreach ($imageReader->getData() as $bildRow) {

                $img = new AdminImage($container);
                $img->src = $bildRow->bild->getImageUrl($imageReader->model->bildAutoSize300);
                $img->width = 300;

            }


        }


        return parent::getContent();
    }
}