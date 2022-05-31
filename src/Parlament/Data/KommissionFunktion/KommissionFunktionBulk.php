<?php
namespace Parlament\Data\KommissionFunktion;
class KommissionFunktionBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var KommissionFunktionModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $funktion;

public function __construct() {
parent::__construct();
$this->model = new KommissionFunktionModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->funktion, $this->funktion);
$id = parent::save();
return $id;
}
}