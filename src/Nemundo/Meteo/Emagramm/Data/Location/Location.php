<?php
namespace Nemundo\Meteo\Emagramm\Data\Location;
class Location extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var LocationModel
*/
protected $model;

/**
* @var string
*/
public $location;

public function __construct() {
parent::__construct();
$this->model = new LocationModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->location, $this->location);
$id = parent::save();
return $id;
}
}