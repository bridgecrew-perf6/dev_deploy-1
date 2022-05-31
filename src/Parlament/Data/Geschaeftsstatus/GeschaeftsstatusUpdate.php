<?php
namespace Parlament\Data\Geschaeftsstatus;
use Nemundo\Model\Data\AbstractModelUpdate;
class GeschaeftsstatusUpdate extends AbstractModelUpdate {
/**
* @var GeschaeftsstatusModel
*/
public $model;

/**
* @var string
*/
public $geschaeftsstatus;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftsstatusModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->geschaeftsstatus, $this->geschaeftsstatus);
parent::update();
}
}