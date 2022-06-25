<?php
namespace Dev\App\Wetzikon\Parameter;
use Nemundo\Web\Parameter\AbstractUrlParameter;
class PoiImageParameter extends AbstractUrlParameter {
protected function loadParameter() {
$this->parameterName = 'poi-image';
}
}