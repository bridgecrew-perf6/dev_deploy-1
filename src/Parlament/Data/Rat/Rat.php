<?php
namespace Parlament\Data\Rat;
class Rat extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var RatModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $rat;

/**
* @var string
*/
public $type;

public function __construct() {
parent::__construct();
$this->model = new RatModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->rat, $this->rat);
$this->typeValueList->setModelValue($this->model->type, $this->type);
$id = parent::save();
return $id;
}
}