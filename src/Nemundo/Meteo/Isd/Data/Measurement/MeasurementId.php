<?php
namespace Nemundo\Meteo\Isd\Data\Measurement;
use Nemundo\Model\Id\AbstractModelIdValue;
class MeasurementId extends AbstractModelIdValue {
/**
* @var MeasurementModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MeasurementModel();
}
}