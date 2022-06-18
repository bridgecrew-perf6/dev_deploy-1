<?php
namespace Nemundo\Meteoschweiz\Data\StationDifference;
class StationDifference extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var StationDifferenceModel
*/
protected $model;

/**
* @var string
*/
public $station1Id;

/**
* @var string
*/
public $station2Id;

public function __construct() {
parent::__construct();
$this->model = new StationDifferenceModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->station1Id, $this->station1Id);
$this->typeValueList->setModelValue($this->model->station2Id, $this->station2Id);
$id = parent::save();
return $id;
}
}