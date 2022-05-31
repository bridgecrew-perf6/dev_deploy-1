<?php
namespace Parlament\Data\Geschaeftstyp;
use Nemundo\Model\Data\AbstractModelUpdate;
class GeschaeftstypUpdate extends AbstractModelUpdate {
/**
* @var GeschaeftstypModel
*/
public $model;

/**
* @var string
*/
public $geschaeftstyp;

/**
* @var string
*/
public $abk;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftstypModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->geschaeftstyp, $this->geschaeftstyp);
$this->typeValueList->setModelValue($this->model->abk, $this->abk);
parent::update();
}
}