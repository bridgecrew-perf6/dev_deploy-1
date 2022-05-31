<?php
namespace Parlament\Data\Kommission;
class KommissionRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var KommissionModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $kommission;

/**
* @var bool
*/
public $aktiv;

/**
* @var int
*/
public $ratId;

/**
* @var \Parlament\Data\Rat\RatRow
*/
public $rat;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->kommission = $this->getModelValue($model->kommission);
$this->aktiv = boolval($this->getModelValue($model->aktiv));
$this->ratId = intval($this->getModelValue($model->ratId));
if ($model->rat !== null) {
$this->loadParlamentDataRatRatratRow($model->rat);
}
}
private function loadParlamentDataRatRatratRow($model) {
$this->rat = new \Parlament\Data\Rat\RatRow($this->row, $model);
}
}