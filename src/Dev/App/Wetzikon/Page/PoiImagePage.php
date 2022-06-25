<?php

namespace Dev\App\Wetzikon\Page;

use Dev\App\Wetzikon\Com\Form\PoiImageForm;
use Dev\App\Wetzikon\Data\PoiBild\PoiBildReader;
use Dev\App\Wetzikon\Parameter\PoiImageParameter;
use Dev\App\Wetzikon\Parameter\PoiParameter;
use Dev\App\Wetzikon\Site\PoiImageDeleteSite;
use Dev\App\Wetzikon\Site\PoiImageSite;
use Dev\App\Wetzikon\Site\PoiSite;
use Nemundo\Admin\Com\Image\AdminImage;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Com\Template\AbstractTemplateDocument;

class PoiImagePage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $poiId= (new PoiParameter())->getValue();

        $table=new AdminTable($this);

        $imageReader = new PoiBildReader();
        $imageReader->filter->andEqual($imageReader->model->poiId, $poiId);
        foreach ($imageReader->getData() as $bildRow) {

            $row=new AdminTableRow($table);

            $img = new AdminImage($row);
            $img->src = $bildRow->bild->getImageUrl($imageReader->model->bildAutoSize300);

            $site=clone(PoiImageDeleteSite::$site);
            $site->addParameter(new PoiImageParameter($bildRow->id));
            $row->addIconSite($site);


        }



        $form=new PoiImageForm($this);
        $form->poiId=$poiId;
        $form->redirectSite=PoiSite::$site;

        return parent::getContent();
    }
}