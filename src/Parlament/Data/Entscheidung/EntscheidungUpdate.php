<?php
namespace Parlament\Data\Entscheidung;
use Nemundo\Model\Data\AbstractModelUpdate;
class EntscheidungUpdate extends AbstractModelUpdate {
/**
* @var EntscheidungModel
*/
public $model;

/**
* @var string
*/
public $entscheidung;

public function __construct() {
parent::__construct();
$this->model = new EntscheidungModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->entscheidung, $this->entscheidung);
parent::update();
}
}