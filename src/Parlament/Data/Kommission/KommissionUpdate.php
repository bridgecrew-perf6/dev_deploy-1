<?php
namespace Parlament\Data\Kommission;
use Nemundo\Model\Data\AbstractModelUpdate;
class KommissionUpdate extends AbstractModelUpdate {
/**
* @var KommissionModel
*/
public $model;

/**
* @var string
*/
public $kommission;

/**
* @var bool
*/
public $aktiv;

/**
* @var string
*/
public $ratId;

public function __construct() {
parent::__construct();
$this->model = new KommissionModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->kommission, $this->kommission);
$this->typeValueList->setModelValue($this->model->aktiv, $this->aktiv);
$this->typeValueList->setModelValue($this->model->ratId, $this->ratId);
parent::update();
}
}