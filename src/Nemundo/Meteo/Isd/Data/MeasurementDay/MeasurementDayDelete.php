<?php
namespace Nemundo\Meteo\Isd\Data\MeasurementDay;
class MeasurementDayDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var MeasurementDayModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MeasurementDayModel();
}
}