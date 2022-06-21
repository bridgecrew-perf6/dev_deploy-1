<?php
namespace Parlament\Data\KommissionFunktion;
use Nemundo\Model\Data\AbstractModelUpdate;
class KommissionFunktionUpdate extends AbstractModelUpdate {
/**
* @var KommissionFunktionModel
*/
public $model;

/**
* @var string
*/
public $funktion;

public function __construct() {
parent::__construct();
$this->model = new KommissionFunktionModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->funktion, $this->funktion);
parent::update();
}
}