<?php
namespace Nemundo\Meteoschweiz\Data\MesswertDateTime;
class MesswertDateTimeValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var MesswertDateTimeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertDateTimeModel();
}
}