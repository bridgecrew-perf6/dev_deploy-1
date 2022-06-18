<?php
namespace Nemundo\Meteoschweiz\Data\Messwert;
class MesswertValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var MesswertModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertModel();
}
}