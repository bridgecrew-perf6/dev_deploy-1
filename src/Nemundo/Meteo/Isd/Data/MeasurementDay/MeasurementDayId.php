<?php
namespace Nemundo\Meteo\Isd\Data\MeasurementDay;
use Nemundo\Model\Id\AbstractModelIdValue;
class MeasurementDayId extends AbstractModelIdValue {
/**
* @var MeasurementDayModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MeasurementDayModel();
}
}