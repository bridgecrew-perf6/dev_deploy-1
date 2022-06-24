<?php
namespace Dev\App\Wetzikon\Page;
use Dev\App\Wetzikon\Com\Form\PoiForm;
use Dev\App\Wetzikon\Site\PoiSite;
use Nemundo\Com\Template\AbstractTemplateDocument;
class PoiNewPage extends AbstractTemplateDocument {
public function getContent() {

    $form = new PoiForm($this);
    $form->redirectSite=PoiSite::$site;



return parent::getContent();
}
}