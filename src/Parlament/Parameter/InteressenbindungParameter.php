<?php
namespace Parlament\Parameter;
use Nemundo\Web\Parameter\AbstractUrlParameter;
class InteressenbindungParameter extends AbstractUrlParameter {
protected function loadParameter() {
$this->parameterName = 'interessenbindung';
}
}