<?php
namespace Parlament\Data\GeschaeftKommission;
use Nemundo\Model\Data\AbstractModelUpdate;
class GeschaeftKommissionUpdate extends AbstractModelUpdate {
/**
* @var GeschaeftKommissionModel
*/
public $model;

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
public function update() {
$this->typeValueList->setModelValue($this->model->geschaeftId, $this->geschaeftId);
$this->typeValueList->setModelValue($this->model->kommissionId, $this->kommissionId);
parent::update();
}
}