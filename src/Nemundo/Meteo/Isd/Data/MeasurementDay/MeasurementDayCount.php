<?php
namespace Nemundo\Meteo\Isd\Data\MeasurementDay;
class MeasurementDayCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var MeasurementDayModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MeasurementDayModel();
}
}