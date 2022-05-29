<?php
namespace Nemundo\Meteo\Isd\Data\Measurement;
class MeasurementCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var MeasurementModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MeasurementModel();
}
}