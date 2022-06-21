<?php
namespace Parlament\Data\LastUpdate;
use Nemundo\Model\Data\AbstractModelUpdate;
class LastUpdateUpdate extends AbstractModelUpdate {
/**
* @var LastUpdateModel
*/
public $model;

/**
* @var \Nemundo\Core\Type\DateTime\DateTime
*/
public $lastUpdate;

public function __construct() {
parent::__construct();
$this->model = new LastUpdateModel();
$this->lastUpdate = new \Nemundo\Core\Type\DateTime\DateTime();
}
public function update() {
$property = new \Nemundo\Model\Data\Property\DateTime\DateTimeDataProperty($this->model->lastUpdate, $this->typeValueList);
$property->setValue($this->lastUpdate);
parent::update();
}
}