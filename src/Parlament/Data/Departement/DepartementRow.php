<?php
namespace Parlament\Data\Departement;
class DepartementRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var DepartementModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $departement;

/**
* @var string
*/
public $abk;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->departement = $this->getModelValue($model->departement);
$this->abk = $this->getModelValue($model->abk);
}
}