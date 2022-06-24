<?php
namespace Dev\App\Wetzikon\Page;
use Dev\App\Wetzikon\Com\Form\PoiForm;
use Nemundo\Com\Template\AbstractTemplateDocument;
class PoiNewPage extends AbstractTemplateDocument {
public function getContent() {

    $form = new PoiForm($this);



return parent::getContent();
}
}