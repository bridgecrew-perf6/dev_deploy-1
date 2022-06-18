<?php
namespace Nemundo\Meteoschweiz\Data\Messwert;
class MesswertCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var MesswertModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertModel();
}
}