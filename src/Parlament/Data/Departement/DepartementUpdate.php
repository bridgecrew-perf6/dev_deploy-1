<?php
namespace Parlament\Data\Departement;
use Nemundo\Model\Data\AbstractModelUpdate;
class DepartementUpdate extends AbstractModelUpdate {
/**
* @var DepartementModel
*/
public $model;

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
public function update() {
$this->typeValueList->setModelValue($this->model->departement, $this->departement);
$this->typeValueList->setModelValue($this->model->abk, $this->abk);
parent::update();
}
}