<?php
namespace Parlament\Data\Abstimmung;
class AbstimmungRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var AbstimmungModel
*/
public $model;

/**
* @var string
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
* @var int
*/
public $geschaeftId;

/**
* @var \Parlament\Row\GeschaeftCustomRow
*/
public $geschaeft;

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

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->abstimmung = $this->getModelValue($model->abstimmung);
$value = $this->getModelValue($model->datum);
if ($value !== "0000-00-00") {
$this->datum = new \Nemundo\Core\Type\DateTime\Date($this->getModelValue($model->datum));
}
$this->geschaeftId = intval($this->getModelValue($model->geschaeftId));
if ($model->geschaeft !== null) {
$this->loadParlamentDataGeschaeftGeschaeftgeschaeftRow($model->geschaeft);
}
$this->ja = intval($this->getModelValue($model->ja));
$this->nein = intval($this->getModelValue($model->nein));
$this->enthaltung = intval($this->getModelValue($model->enthaltung));
$this->zeit = new \Nemundo\Core\Type\DateTime\Time($this->getModelValue($model->zeit));
$this->jaBedeutung = $this->getModelValue($model->jaBedeutung);
$this->neinBedeutung = $this->getModelValue($model->neinBedeutung);
$this->lastUpdate = new \Nemundo\Core\Type\DateTime\DateTime($this->getModelValue($model->lastUpdate));
}
private function loadParlamentDataGeschaeftGeschaeftgeschaeftRow($model) {
$this->geschaeft = new \Parlament\Row\GeschaeftCustomRow($this->row, $model);
}
}