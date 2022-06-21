<?php
namespace Parlament\Data\Abstimmung;
class Abstimmung extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var AbstimmungModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $abstimmung;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $datum;

/**
* @var string
*/
public $geschaeftId;

/**
* @var int
*/
public $ja;

/**
* @var int
*/
public $nein;

/**
* @var int
*/
public $enthaltung;

/**
* @var \Nemundo\Core\Type\DateTime\Time
*/
public $zeit;

/**
* @var string
*/
public $jaBedeutung;

/**
* @var string
*/
public $neinBedeutung;

/**
* @var \Nemundo\Core\Type\DateTime\DateTime
*/
public $lastUpdate;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungModel();
$this->datum = new \Nemundo\Core\Type\DateTime\Date();
$this->zeit = new \Nemundo\Core\Type\DateTime\Time();
$this->lastUpdate = new \Nemundo\Core\Type\DateTime\DateTime();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->abstimmung, $this->abstimmung);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->datum, $this->typeValueList);
$property->setValue($this->datum);
$this->typeValueList->setModelValue($this->model->geschaeftId, $this->geschaeftId);
$this->typeValueList->setModelValue($this->model->ja, $this->ja);
$this->typeValueList->setModelValue($this->model->nein, $this->nein);
$this->typeValueList->setModelValue($this->model->enthaltung, $this->enthaltung);
$property = new \Nemundo\Model\Data\Property\DateTime\TimeDataProperty($this->model->zeit, $this->typeValueList);
$property->setValue($this->zeit);
$this->typeValueList->setModelValue($this->model->jaBedeutung, $this->jaBedeutung);
$this->typeValueList->setModelValue($this->model->neinBedeutung, $this->neinBedeutung);
$property = new \Nemundo\Model\Data\Property\DateTime\DateTimeDataProperty($this->model->lastUpdate, $this->typeValueList);
$property->setValue($this->lastUpdate);
$id = parent::save();
return $id;
}
}