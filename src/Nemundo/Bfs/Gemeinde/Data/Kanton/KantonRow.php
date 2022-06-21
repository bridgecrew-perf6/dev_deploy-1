<?php
namespace Nemundo\Bfs\Gemeinde\Data\Kanton;
class KantonRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var KantonModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $kantonAbk;

/**
* @var string
*/
public $kanton;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->kantonAbk = $this->getModelValue($model->kantonAbk);
$this->kanton = $this->getModelValue($model->kanton);
}
}