<?php
namespace Parlament\Data\Sprache;
use Nemundo\Model\Data\AbstractModelUpdate;
class SpracheUpdate extends AbstractModelUpdate {
/**
* @var SpracheModel
*/
public $model;

/**
* @var string
*/
public $code;

/**
* @var string
*/
public $sprache;

public function __construct() {
parent::__construct();
$this->model = new SpracheModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->code, $this->code);
$this->typeValueList->setModelValue($this->model->sprache, $this->sprache);
parent::update();
}
}