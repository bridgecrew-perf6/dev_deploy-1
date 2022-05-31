<?php
namespace Parlament\Data\GeschaeftText;
class GeschaeftText extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var GeschaeftTextModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->geschaeftId, $this->geschaeftId);
$this->typeValueList->setModelValue($this->model->textTypId, $this->textTypId);
$this->typeValueList->setModelValue($this->model->text, $this->text);
$id = parent::save();
return $id;
}
}