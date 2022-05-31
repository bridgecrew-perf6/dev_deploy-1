<?php
namespace Parlament\Data\GeschaeftText;
class GeschaeftTextReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var GeschaeftTextModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextModel();
}
/**
* @return GeschaeftTextRow[]
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
* @return GeschaeftTextRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return GeschaeftTextRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new GeschaeftTextRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}