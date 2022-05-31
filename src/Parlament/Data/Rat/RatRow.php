<?php
namespace Parlament\Data\Rat;
class RatRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var RatModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $rat;

/**
* @var string
*/
public $type;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->rat = $this->getModelValue($model->rat);
$this->type = $this->getModelValue($model->type);
}
}