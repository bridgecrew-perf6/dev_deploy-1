<?php
namespace Parlament\Data\GeschaeftThema;
use Nemundo\Model\Data\AbstractModelUpdate;
class GeschaeftThemaUpdate extends AbstractModelUpdate {
/**
* @var GeschaeftThemaModel
*/
public $model;

/**
* @var string
*/
public $geschaeftId;

/**
* @var string
*/
public $themaId;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftThemaModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->geschaeftId, $this->geschaeftId);
$this->typeValueList->setModelValue($this->model->themaId, $this->themaId);
parent::update();
}
}