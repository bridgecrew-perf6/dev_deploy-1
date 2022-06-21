<?php
namespace Parlament\Data\Sprache;
class SpracheRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var SpracheModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $code;

/**
* @var string
*/
public $sprache;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->code = $this->getModelValue($model->code);
$this->sprache = $this->getModelValue($model->sprache);
}
}