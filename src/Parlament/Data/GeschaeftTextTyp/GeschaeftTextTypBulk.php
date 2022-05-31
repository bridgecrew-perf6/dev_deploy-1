<?php
namespace Parlament\Data\GeschaeftTextTyp;
class GeschaeftTextTypBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var GeschaeftTextTypModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $textTyp;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextTypModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->textTyp, $this->textTyp);
$id = parent::save();
return $id;
}
}