<?php
namespace Parlament\Data\Geschaeft;
use Nemundo\Model\Data\AbstractModelUpdate;
class GeschaeftUpdate extends AbstractModelUpdate {
/**
* @var GeschaeftModel
*/
public $model;

/**
* @var string
*/
public $kurzbezeichnung;

/**
* @var string
*/
public $geschaeft;

/**
* @var string
*/
public $geschaeftstypId;

/**
* @var string
*/
public $sessionId;

/**
* @var string
*/
public $geschaeftsstatusId;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->kurzbezeichnung, $this->kurzbezeichnung);
$this->typeValueList->setModelValue($this->model->geschaeft, $this->geschaeft);
$this->typeValueList->setModelValue($this->model->geschaeftstypId, $this->geschaeftstypId);
$this->typeValueList->setModelValue($this->model->sessionId, $this->sessionId);
$this->typeValueList->setModelValue($this->model->geschaeftsstatusId, $this->geschaeftsstatusId);
parent::update();
}
}