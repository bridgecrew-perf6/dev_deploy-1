<?php
namespace Nemundo\Bfs\Gemeinde\Data\Kanton;
class KantonReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var KantonModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KantonModel();
}
/**
* @return KantonRow[]
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
* @return KantonRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return KantonRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new KantonRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}