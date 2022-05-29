<?php
namespace Nemundo\Meteo\Isd\Data\Measurement;
class MeasurementDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var MeasurementModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MeasurementModel();
}
}