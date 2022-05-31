<?php
namespace Parlament\Data\Geschaeftsstatus;
class GeschaeftsstatusRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var GeschaeftsstatusModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $geschaeftsstatus;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->geschaeftsstatus = $this->getModelValue($model->geschaeftsstatus);
}
}