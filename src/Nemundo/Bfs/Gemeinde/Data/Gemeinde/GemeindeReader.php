<?php
namespace Nemundo\Bfs\Gemeinde\Data\Gemeinde;
class GemeindeReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var GemeindeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GemeindeModel();
}
/**
* @return GemeindeRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = $this->getModelRow($dataRow);
$list[] = $row;
}
return $list;
}
/**
* @return GemeindeRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return GemeindeRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new GemeindeRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}