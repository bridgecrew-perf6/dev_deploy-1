<?php
namespace Parlament\Data\GeschaeftKommission;
class GeschaeftKommissionRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var GeschaeftKommissionModel
*/
public $model;

/**
* @var string
*/
public $id;

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
public $kommissionId;

/**
* @var \Parlament\Data\Kommission\KommissionRow
*/
public $kommission;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->geschaeftId = intval($this->getModelValue($model->geschaeftId));
if ($model->geschaeft !== null) {
$this->loadParlamentDataGeschaeftGeschaeftgeschaeftRow($model->geschaeft);
}
$this->kommissionId = intval($this->getModelValue($model->kommissionId));
if ($model->kommission !== null) {
$this->loadParlamentDataKommissionKommissionkommissionRow($model->kommission);
}
}
private function loadParlamentDataGeschaeftGeschaeftgeschaeftRow($model) {
$this->geschaeft = new \Parlament\Row\GeschaeftCustomRow($this->row, $model);
}
private function loadParlamentDataKommissionKommissionkommissionRow($model) {
$this->kommission = new \Parlament\Data\Kommission\KommissionRow($this->row, $model);
}
}