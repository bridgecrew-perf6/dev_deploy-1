<?php
namespace Parlament\Data\RatsmitgliedInteressenbindung;
class RatsmitgliedInteressenbindungRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var RatsmitgliedInteressenbindungModel
*/
public $model;

/**
* @var string
*/
public $id;

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
public $interessenbindungId;

/**
* @var \Parlament\Data\Interessenbindung\InteressenbindungRow
*/
public $interessenbindung;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->ratsmitgliedId = intval($this->getModelValue($model->ratsmitgliedId));
if ($model->ratsmitglied !== null) {
$this->loadParlamentDataRatsmitgliedRatsmitgliedratsmitgliedRow($model->ratsmitglied);
}
$this->interessenbindungId = intval($this->getModelValue($model->interessenbindungId));
if ($model->interessenbindung !== null) {
$this->loadParlamentDataInteressenbindungInteressenbindunginteressenbindungRow($model->interessenbindung);
}
}
private function loadParlamentDataRatsmitgliedRatsmitgliedratsmitgliedRow($model) {
$this->ratsmitglied = new \Parlament\Row\RatsmitgliedCustomRow($this->row, $model);
}
private function loadParlamentDataInteressenbindungInteressenbindunginteressenbindungRow($model) {
$this->interessenbindung = new \Parlament\Data\Interessenbindung\InteressenbindungRow($this->row, $model);
}
}