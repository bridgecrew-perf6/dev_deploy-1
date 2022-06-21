<?php
namespace Parlament\Data\KommissionRatsmitglied;
class KommissionRatsmitgliedRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var KommissionRatsmitgliedModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $kommissionId;

/**
* @var \Parlament\Data\Kommission\KommissionRow
*/
public $kommission;

/**
* @var int
*/
public $ratsmitgliedId;

/**
* @var \Parlament\Row\RatsmitgliedCustomRow
*/
public $ratsmitglied;

/**
* @var bool
*/
public $aktiv;

/**
* @var int
*/
public $funktionId;

/**
* @var \Parlament\Data\KommissionFunktion\KommissionFunktionRow
*/
public $funktion;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->kommissionId = intval($this->getModelValue($model->kommissionId));
if ($model->kommission !== null) {
$this->loadParlamentDataKommissionKommissionkommissionRow($model->kommission);
}
$this->ratsmitgliedId = intval($this->getModelValue($model->ratsmitgliedId));
if ($model->ratsmitglied !== null) {
$this->loadParlamentDataRatsmitgliedRatsmitgliedratsmitgliedRow($model->ratsmitglied);
}
$this->aktiv = boolval($this->getModelValue($model->aktiv));
$this->funktionId = intval($this->getModelValue($model->funktionId));
if ($model->funktion !== null) {
$this->loadParlamentDataKommissionFunktionKommissionFunktionfunktionRow($model->funktion);
}
}
private function loadParlamentDataKommissionKommissionkommissionRow($model) {
$this->kommission = new \Parlament\Data\Kommission\KommissionRow($this->row, $model);
}
private function loadParlamentDataRatsmitgliedRatsmitgliedratsmitgliedRow($model) {
$this->ratsmitglied = new \Parlament\Row\RatsmitgliedCustomRow($this->row, $model);
}
private function loadParlamentDataKommissionFunktionKommissionFunktionfunktionRow($model) {
$this->funktion = new \Parlament\Data\KommissionFunktion\KommissionFunktionRow($this->row, $model);
}
}