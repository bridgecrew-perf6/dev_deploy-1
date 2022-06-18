<?php
namespace Nemundo\Meteoschweiz\Data\StationDifference;
use Nemundo\Model\Data\AbstractModelUpdate;
class StationDifferenceUpdate extends AbstractModelUpdate {
/**
* @var StationDifferenceModel
*/
public $model;

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
public function update() {
$this->typeValueList->setModelValue($this->model->station1Id, $this->station1Id);
$this->typeValueList->setModelValue($this->model->station2Id, $this->station2Id);
parent::update();
}
}