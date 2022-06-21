<?php
namespace Parlament\Data\GeschaeftThema;
class GeschaeftThemaReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var GeschaeftThemaModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftThemaModel();
}
/**
* @return GeschaeftThemaRow[]
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
* @return GeschaeftThemaRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return GeschaeftThemaRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new GeschaeftThemaRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}