<?php
namespace Nemundo\Meteo\Emagramm\Data\Location;
use Nemundo\Model\Data\AbstractModelUpdate;
class LocationUpdate extends AbstractModelUpdate {
/**
* @var LocationModel
*/
public $model;

/**
* @var string
*/
public $location;

public function __construct() {
parent::__construct();
$this->model = new LocationModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->location, $this->location);
parent::update();
}
}