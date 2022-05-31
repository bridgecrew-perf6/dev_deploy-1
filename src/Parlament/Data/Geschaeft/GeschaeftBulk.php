<?php
namespace Parlament\Data\Geschaeft;
class GeschaeftBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var GeschaeftModel
*/
protected $model;

/**
* @var int
*/
public $id;

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
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->kurzbezeichnung, $this->kurzbezeichnung);
$this->typeValueList->setModelValue($this->model->geschaeft, $this->geschaeft);
$this->typeValueList->setModelValue($this->model->geschaeftstypId, $this->geschaeftstypId);
$this->typeValueList->setModelValue($this->model->sessionId, $this->sessionId);
$this->typeValueList->setModelValue($this->model->geschaeftsstatusId, $this->geschaeftsstatusId);
$id = parent::save();
return $id;
}
}