<?php
namespace Nemundo\Bfs\Gemeinde\Parameter;
use Nemundo\Web\Parameter\AbstractUrlParameter;
class KantonParameter extends AbstractUrlParameter {
protected function loadParameter() {
$this->parameterName = 'kanton';
}
}