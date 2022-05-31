<?php
namespace Parlament\Data\GeschaeftTextTyp;
use Nemundo\Model\Data\AbstractModelUpdate;
class GeschaeftTextTypUpdate extends AbstractModelUpdate {
/**
* @var GeschaeftTextTypModel
*/
public $model;

/**
* @var string
*/
public $textTyp;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextTypModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->textTyp, $this->textTyp);
parent::update();
}
}