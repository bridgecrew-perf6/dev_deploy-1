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

/**
* @var string
*/
public $geschaeftsstatusId;

/**
* @var \Nemundo\Core\Type\DateTime\DateTime
*/
public $lastUpdate;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $datumEinreichung;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftModel();
$this->lastUpdate = new \Nemundo\Core\Type\DateTime\DateTime();
$this->datumEinreichung = new \Nemundo\Core\Type\DateTime\Date();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->kurzbezeichnung, $this->kurzbezeichnung);
$this->typeValueList->setModelValue($this->model->geschaeft, $this->geschaeft);
$this->typeValueList->setModelValue($this->model->geschaeftstypId, $this->geschaeftstypId);
$this->typeValueList->setModelValue($this->model->sessionId, $this->sessionId);
$this->typeValueList->setModelValue($this->model->geschaeftsstatusId, $this->geschaeftsstatusId);
$property = new \Nemundo\Model\Data\Property\DateTime\DateTimeDataProperty($this->model->lastUpdate, $this->typeValueList);
$property->setValue($this->lastUpdate);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->datumEinreichung, $this->typeValueList);
$property->setValue($this->datumEinreichung);
$id = parent::save();
return $id;
}
}