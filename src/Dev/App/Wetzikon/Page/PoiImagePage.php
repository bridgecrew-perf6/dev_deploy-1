<?php

namespace Dev\App\Wetzikon\Page;

use Dev\App\Wetzikon\Com\Form\PoiImageForm;
use Dev\App\Wetzikon\Parameter\PoiParameter;
use Dev\App\Wetzikon\Site\PoiSite;
use Nemundo\Com\Template\AbstractTemplateDocument;

class PoiImagePage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $form=new PoiImageForm($this);
        $form->poiId= (new PoiParameter())->getValue();
        $form->redirectSite=PoiSite::$site;

        return parent::getContent();
    }
}