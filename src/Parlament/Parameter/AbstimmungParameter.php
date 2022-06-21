<?php
namespace Parlament\Parameter;
use Nemundo\Web\Parameter\AbstractUrlParameter;
class AbstimmungParameter extends AbstractUrlParameter {
protected function loadParameter() {
$this->parameterName = 'abstimmung';
}
}