<?php
namespace Parlament\Data\GeschaeftText;
use Nemundo\Model\Data\AbstractModelUpdate;
class GeschaeftTextUpdate extends AbstractModelUpdate {
/**
* @var GeschaeftTextModel
*/
public $model;

/**
* @var string
*/
public $geschaeftId;

/**
* @var string
*/
public $textTypId;

/**
* @var string
*/
public $text;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->geschaeftId, $this->geschaeftId);
$this->typeValueList->setModelValue($this->model->textTypId, $this->textTypId);
$this->typeValueList->setModelValue($this->model->text, $this->text);
parent::update();
}
}