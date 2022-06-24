<?php
namespace Dev\App\Wetzikon\Parameter;
use Nemundo\Web\Parameter\AbstractUrlParameter;
class PoiParameter extends AbstractUrlParameter {
protected function loadParameter() {
$this->parameterName = 'poi';
}
}