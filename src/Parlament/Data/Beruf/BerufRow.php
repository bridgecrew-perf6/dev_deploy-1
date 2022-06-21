<?php
namespace Parlament\Data\Beruf;
class BerufRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var BerufModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $beruf;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->beruf = $this->getModelValue($model->beruf);
}
}