<?php
namespace Parlament\Parameter;
use Nemundo\Web\Parameter\AbstractUrlParameter;
class FraktionParameter extends AbstractUrlParameter {
protected function loadParameter() {
$this->parameterName = 'fraktion';
}
}