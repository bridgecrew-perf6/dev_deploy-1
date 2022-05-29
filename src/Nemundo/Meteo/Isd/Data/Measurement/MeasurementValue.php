<?php
namespace Nemundo\Meteo\Isd\Data\Measurement;
class MeasurementValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var MeasurementModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MeasurementModel();
}
}