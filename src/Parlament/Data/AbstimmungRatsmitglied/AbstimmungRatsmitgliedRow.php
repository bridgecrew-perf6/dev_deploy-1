<?php
namespace Parlament\Data\AbstimmungRatsmitglied;
class AbstimmungRatsmitgliedRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var AbstimmungRatsmitgliedModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $abstimmungId;

/**
* @var \Parlament\Row\AbstimmungCustomRow
*/
public $abstimmung;

/**
* @var int
*/
public $ratsmitgliedId;

/**
* @var \Parlament\Row\RatsmitgliedCustomRow
*/
public $ratsmitglied;

/**
* @var int
*/
public $entscheidungId;

/**
* @var \Parlament\Data\Entscheidung\EntscheidungRow
*/
public $entscheidung;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->abstimmungId = intval($this->getModelValue($model->abstimmungId));
if ($model->abstimmung !== null) {
$this->loadParlamentDataAbstimmungAbstimmungabstimmungRow($model->abstimmung);
}
$this->ratsmitgliedId = intval($this->getModelValue($model->ratsmitgliedId));
if ($model->ratsmitglied !== null) {
$this->loadParlamentDataRatsmitgliedRatsmitgliedratsmitgliedRow($model->ratsmitglied);
}
$this->entscheidungId = intval($this->getModelValue($model->entscheidungId));
if ($model->entscheidung !== null) {
$this->loadParlamentDataEntscheidungEntscheidungentscheidungRow($model->entscheidung);
}
}
private function loadParlamentDataAbstimmungAbstimmungabstimmungRow($model) {
$this->abstimmung = new \Parlament\Row\AbstimmungCustomRow($this->row, $model);
}
private function loadParlamentDataRatsmitgliedRatsmitgliedratsmitgliedRow($model) {
$this->ratsmitglied = new \Parlament\Row\RatsmitgliedCustomRow($this->row, $model);
}
private function loadParlamentDataEntscheidungEntscheidungentscheidungRow($model) {
$this->entscheidung = new \Parlament\Data\Entscheidung\EntscheidungRow($this->row, $model);
}
}