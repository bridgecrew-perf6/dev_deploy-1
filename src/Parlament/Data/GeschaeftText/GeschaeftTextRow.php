<?php
namespace Parlament\Data\GeschaeftText;
class GeschaeftTextRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var GeschaeftTextModel
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
public $textTypId;

/**
* @var \Parlament\Data\GeschaeftTextTyp\GeschaeftTextTypRow
*/
public $textTyp;

/**
* @var string
*/
public $text;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->geschaeftId = intval($this->getModelValue($model->geschaeftId));
if ($model->geschaeft !== null) {
$this->loadParlamentDataGeschaeftGeschaeftgeschaeftRow($model->geschaeft);
}
$this->textTypId = intval($this->getModelValue($model->textTypId));
if ($model->textTyp !== null) {
$this->loadParlamentDataGeschaeftTextTypGeschaeftTextTyptextTypRow($model->textTyp);
}
$this->text = $this->getModelValue($model->text);
}
private function loadParlamentDataGeschaeftGeschaeftgeschaeftRow($model) {
$this->geschaeft = new \Parlament\Row\GeschaeftCustomRow($this->row, $model);
}
private function loadParlamentDataGeschaeftTextTypGeschaeftTextTyptextTypRow($model) {
$this->textTyp = new \Parlament\Data\GeschaeftTextTyp\GeschaeftTextTypRow($this->row, $model);
}
}