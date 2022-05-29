<?php
namespace Nemundo\Meteo\Isd\Data\DateContentStation;
class DateContentStationValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var DateContentStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DateContentStationModel();
}
}