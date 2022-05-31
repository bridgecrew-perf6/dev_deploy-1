<?php
namespace Parlament\Data\Geschaeftstyp;
class GeschaeftstypRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var GeschaeftstypModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $geschaeftstyp;

/**
* @var string
*/
public $abk;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->geschaeftstyp = $this->getModelValue($model->geschaeftstyp);
$this->abk = $this->getModelValue($model->abk);
}
}