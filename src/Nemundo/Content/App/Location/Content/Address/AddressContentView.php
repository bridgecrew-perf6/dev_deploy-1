<?php
namespace Nemundo\Content\App\Location\Content\Address;
use Nemundo\Content\View\AbstractContentView;
class AddressContentView extends AbstractContentView {
/**
* @var AddressContentType
*/
public $contentType;

protected function loadView() {
$this->viewName='default';
$this->viewId = 'f130c269-465c-480f-be96-c3ccfe98c982';
$this->defaultView = true;
}
public function getContent() {
return parent::getContent();
}
}