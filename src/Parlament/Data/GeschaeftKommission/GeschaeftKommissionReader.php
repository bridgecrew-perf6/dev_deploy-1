<?php
namespace Parlament\Data\GeschaeftKommission;
class GeschaeftKommissionReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var GeschaeftKommissionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftKommissionModel();
}
/**
* @return GeschaeftKommissionRow[]
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
* @return GeschaeftKommissionRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return GeschaeftKommissionRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new GeschaeftKommissionRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}