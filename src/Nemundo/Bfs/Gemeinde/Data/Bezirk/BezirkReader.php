<?php
namespace Nemundo\Bfs\Gemeinde\Data\Bezirk;
class BezirkReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var BezirkModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new BezirkModel();
}
/**
* @return BezirkRow[]
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
* @return BezirkRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return BezirkRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new BezirkRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}