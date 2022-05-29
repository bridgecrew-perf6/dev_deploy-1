<?php
namespace Nemundo\Meteo\Isd\Data\Station;
class StationValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var StationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StationModel();
}
}