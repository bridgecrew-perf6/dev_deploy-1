<?php
namespace Parlament\Data\GeschaeftTextTyp;
class GeschaeftTextTypRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var GeschaeftTextTypModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $textTyp;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->textTyp = $this->getModelValue($model->textTyp);
}
}