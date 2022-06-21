<?php
namespace Nemundo\Bfs\Abstimmung\Data\Jahr;
class JahrReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var JahrModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new JahrModel();
}
/**
* @return JahrRow[]
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
* @return JahrRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return JahrRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new JahrRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}