<?php
namespace Parlament\Data\RatsmitgliedBeruf;
class RatsmitgliedBerufRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var RatsmitgliedBerufModel
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
public $berufId;

/**
* @var \Parlament\Data\Beruf\BerufRow
*/
public $beruf;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->ratsmitgliedId = intval($this->getModelValue($model->ratsmitgliedId));
if ($model->ratsmitglied !== null) {
$this->loadParlamentDataRatsmitgliedRatsmitgliedratsmitgliedRow($model->ratsmitglied);
}
$this->berufId = intval($this->getModelValue($model->berufId));
if ($model->beruf !== null) {
$this->loadParlamentDataBerufBerufberufRow($model->beruf);
}
}
private function loadParlamentDataRatsmitgliedRatsmitgliedratsmitgliedRow($model) {
$this->ratsmitglied = new \Parlament\Row\RatsmitgliedCustomRow($this->row, $model);
}
private function loadParlamentDataBerufBerufberufRow($model) {
$this->beruf = new \Parlament\Data\Beruf\BerufRow($this->row, $model);
}
}