<?php
namespace Parlament\Data\Geschlecht;
class GeschlechtRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var GeschlechtModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $geschlecht;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->geschlecht = $this->getModelValue($model->geschlecht);
}
}