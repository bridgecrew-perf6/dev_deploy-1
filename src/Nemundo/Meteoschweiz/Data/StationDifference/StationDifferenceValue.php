<?php
namespace Nemundo\Meteoschweiz\Data\StationDifference;
class StationDifferenceValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var StationDifferenceModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StationDifferenceModel();
}
}