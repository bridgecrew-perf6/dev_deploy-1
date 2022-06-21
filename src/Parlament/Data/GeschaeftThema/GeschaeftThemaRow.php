<?php
namespace Parlament\Data\GeschaeftThema;
class GeschaeftThemaRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var GeschaeftThemaModel
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
public $themaId;

/**
* @var \Parlament\Data\Thema\ThemaRow
*/
public $thema;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->geschaeftId = intval($this->getModelValue($model->geschaeftId));
if ($model->geschaeft !== null) {
$this->loadParlamentDataGeschaeftGeschaeftgeschaeftRow($model->geschaeft);
}
$this->themaId = intval($this->getModelValue($model->themaId));
if ($model->thema !== null) {
$this->loadParlamentDataThemaThemathemaRow($model->thema);
}
}
private function loadParlamentDataGeschaeftGeschaeftgeschaeftRow($model) {
$this->geschaeft = new \Parlament\Row\GeschaeftCustomRow($this->row, $model);
}
private function loadParlamentDataThemaThemathemaRow($model) {
$this->thema = new \Parlament\Data\Thema\ThemaRow($this->row, $model);
}
}