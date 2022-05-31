<?php
namespace Parlament\Data\Sprache;
class Sprache extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var SpracheModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->code, $this->code);
$this->typeValueList->setModelValue($this->model->sprache, $this->sprache);
$id = parent::save();
return $id;
}
}