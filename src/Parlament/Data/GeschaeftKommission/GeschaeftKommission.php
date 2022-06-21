<?php
namespace Parlament\Data\GeschaeftKommission;
class GeschaeftKommission extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var GeschaeftKommissionModel
*/
protected $model;

/**
* @var string
*/
public $geschaeftId;

/**
* @var string
*/
public $kommissionId;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftKommissionModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->geschaeftId, $this->geschaeftId);
$this->typeValueList->setModelValue($this->model->kommissionId, $this->kommissionId);
$id = parent::save();
return $id;
}
}