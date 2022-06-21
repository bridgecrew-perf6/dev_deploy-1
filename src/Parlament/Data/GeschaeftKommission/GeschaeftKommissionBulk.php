<?php
namespace Parlament\Data\GeschaeftKommission;
class GeschaeftKommissionBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
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