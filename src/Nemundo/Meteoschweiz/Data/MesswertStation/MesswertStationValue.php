<?php
namespace Nemundo\Meteoschweiz\Data\MesswertStation;
class MesswertStationValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var MesswertStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertStationModel();
}
}