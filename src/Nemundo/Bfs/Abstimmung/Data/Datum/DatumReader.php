<?php
namespace Nemundo\Bfs\Abstimmung\Data\Datum;
class DatumReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var DatumModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DatumModel();
}
/**
* @return DatumRow[]
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
* @return DatumRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return DatumRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new DatumRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}