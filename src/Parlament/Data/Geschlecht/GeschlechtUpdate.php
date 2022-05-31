<?php
namespace Parlament\Data\Geschlecht;
use Nemundo\Model\Data\AbstractModelUpdate;
class GeschlechtUpdate extends AbstractModelUpdate {
/**
* @var GeschlechtModel
*/
public $model;

/**
* @var string
*/
public $geschlecht;

public function __construct() {
parent::__construct();
$this->model = new GeschlechtModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->geschlecht, $this->geschlecht);
parent::update();
}
}