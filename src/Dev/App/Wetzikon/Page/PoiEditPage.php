<?php

namespace Dev\App\Wetzikon\Page;

use Dev\App\Wetzikon\Com\Form\PoiForm;
use Dev\App\Wetzikon\Parameter\PoiParameter;
use Dev\App\Wetzikon\Site\PoiSite;
use Nemundo\Com\Template\AbstractTemplateDocument;

class PoiEditPage extends AbstractTemplateDocument
{
    public function getContent()
    {


        $form=new PoiForm($this);
        $form->dataId= (new PoiParameter())->getValue();
        $form->redirectSite=PoiSite::$site;

        return parent::getContent();
    }
}