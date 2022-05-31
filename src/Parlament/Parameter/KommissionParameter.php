<?php
namespace Parlament\Parameter;
use Nemundo\Web\Parameter\AbstractUrlParameter;
class KommissionParameter extends AbstractUrlParameter {
protected function loadParameter() {
$this->parameterName = 'kommission';
}
}