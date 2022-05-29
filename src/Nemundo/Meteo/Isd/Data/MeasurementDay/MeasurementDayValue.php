<?php
namespace Nemundo\Meteo\Isd\Data\MeasurementDay;
class MeasurementDayValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var MeasurementDayModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MeasurementDayModel();
}
}