<?php
namespace Parlament\Data\Rat;
use Nemundo\Model\Data\AbstractModelUpdate;
class RatUpdate extends AbstractModelUpdate {
/**
* @var RatModel
*/
public $model;

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
public function update() {
$this->typeValueList->setModelValue($this->model->rat, $this->rat);
$this->typeValueList->setModelValue($this->model->type, $this->type);
parent::update();
}
}