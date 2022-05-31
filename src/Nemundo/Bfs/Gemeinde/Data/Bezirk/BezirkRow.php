<?php
namespace Nemundo\Bfs\Gemeinde\Data\Bezirk;
class BezirkRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var BezirkModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $bezirk;

/**
* @var int
*/
public $kantonId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonRow
*/
public $kanton;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->bezirk = $this->getModelValue($model->bezirk);
$this->kantonId = intval($this->getModelValue($model->kantonId));
if ($model->kanton !== null) {
$this->loadNemundoBfsGemeindeDataKantonKantonkantonRow($model->kanton);
}
}
private function loadNemundoBfsGemeindeDataKantonKantonkantonRow($model) {
$this->kanton = new \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonRow($this->row, $model);
}
}