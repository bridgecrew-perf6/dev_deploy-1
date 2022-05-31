<?php
namespace Parlament\Data\Departement;
class DepartementBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var DepartementModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $departement;

/**
* @var string
*/
public $abk;

public function __construct() {
parent::__construct();
$this->model = new DepartementModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->departement, $this->departement);
$this->typeValueList->setModelValue($this->model->abk, $this->abk);
$id = parent::save();
return $id;
}
}