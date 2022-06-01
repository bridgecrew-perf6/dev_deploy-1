<?php
namespace Parlament\Data\LastUpdate;
class LastUpdate extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var LastUpdateModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var \Nemundo\Core\Type\DateTime\DateTime
*/
public $lastUpdate;

public function __construct() {
parent::__construct();
$this->model = new LastUpdateModel();
$this->lastUpdate = new \Nemundo\Core\Type\DateTime\DateTime();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$property = new \Nemundo\Model\Data\Property\DateTime\DateTimeDataProperty($this->model->lastUpdate, $this->typeValueList);
$property->setValue($this->lastUpdate);
$id = parent::save();
return $id;
}
}