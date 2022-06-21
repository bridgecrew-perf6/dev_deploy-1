<?php
namespace Parlament\Parameter;
use Nemundo\Web\Parameter\AbstractUrlParameter;
class RatParameter extends AbstractUrlParameter {
protected function loadParameter() {
$this->parameterName = 'rat';
}
}