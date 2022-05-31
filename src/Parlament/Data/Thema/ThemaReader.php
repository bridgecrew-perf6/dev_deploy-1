<?php
namespace Parlament\Data\Thema;
class ThemaReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var ThemaModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ThemaModel();
}
/**
* @return ThemaRow[]
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
* @return ThemaRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return ThemaRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new ThemaRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}