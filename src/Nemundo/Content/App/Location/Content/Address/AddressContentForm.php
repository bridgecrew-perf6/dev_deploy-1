<?php
namespace Nemundo\Content\App\Location\Content\Address;
use Nemundo\Content\Form\AbstractContentForm;
class AddressContentForm extends AbstractContentForm {
/**
* @var AddressContentType
*/
public $contentType;

public function getContent() {
return parent::getContent();
}
public function onSubmit() {
$this->contentType->saveType();
}
}