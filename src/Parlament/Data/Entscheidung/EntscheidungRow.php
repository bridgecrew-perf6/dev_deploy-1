<?php
namespace Parlament\Data\Entscheidung;
class EntscheidungRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var EntscheidungModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $entscheidung;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->entscheidung = $this->getModelValue($model->entscheidung);
}
}