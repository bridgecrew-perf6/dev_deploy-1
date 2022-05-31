<?php
namespace Parlament\Data\Geschaeft;
class Geschaeft extends \Nemundo\Model\Data\AbstractModelData {
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
$id = parent::save();
return $id;
}
}