<?php
namespace Parlament\Data\Geschaeftsstatus;
class GeschaeftsstatusBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var GeschaeftsstatusModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $geschaeftsstatus;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftsstatusModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->geschaeftsstatus, $this->geschaeftsstatus);
$id = parent::save();
return $id;
}
}