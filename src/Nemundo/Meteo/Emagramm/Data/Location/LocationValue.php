<?php
namespace Nemundo\Meteo\Emagramm\Data\Location;
class LocationValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var LocationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LocationModel();
}
}