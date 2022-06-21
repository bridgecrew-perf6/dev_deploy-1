<?php
namespace Nemundo\Bfs\Gemeinde\Data\Gemeinde;
class GemeindeRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var GemeindeModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $gemeinde;

/**
* @var int
*/
public $kantonId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonRow
*/
public $kanton;

/**
* @var int
*/
public $bezirkId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkRow
*/
public $bezirk;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->gemeinde = $this->getModelValue($model->gemeinde);
$this->kantonId = intval($this->getModelValue($model->kantonId));
if ($model->kanton !== null) {
$this->loadNemundoBfsGemeindeDataKantonKantonkantonRow($model->kanton);
}
$this->bezirkId = intval($this->getModelValue($model->bezirkId));
if ($model->bezirk !== null) {
$this->loadNemundoBfsGemeindeDataBezirkBezirkbezirkRow($model->bezirk);
}
}
private function loadNemundoBfsGemeindeDataKantonKantonkantonRow($model) {
$this->kanton = new \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonRow($this->row, $model);
}
private function loadNemundoBfsGemeindeDataBezirkBezirkbezirkRow($model) {
$this->bezirk = new \Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkRow($this->row, $model);
}
}