<?php
namespace Parlament\Data\Geschlecht;
class Geschlecht extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var GeschlechtModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $geschlecht;

public function __construct() {
parent::__construct();
$this->model = new GeschlechtModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->geschlecht, $this->geschlecht);
$id = parent::save();
return $id;
}
}