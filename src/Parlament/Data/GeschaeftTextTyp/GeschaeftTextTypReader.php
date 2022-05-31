<?php
namespace Parlament\Data\GeschaeftTextTyp;
class GeschaeftTextTypReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var GeschaeftTextTypModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextTypModel();
}
/**
* @return GeschaeftTextTypRow[]
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
* @return GeschaeftTextTypRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return GeschaeftTextTypRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new GeschaeftTextTypRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}