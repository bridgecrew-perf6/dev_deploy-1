<?php
namespace Parlament\Data\Geschaeftstyp;
class GeschaeftstypReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var GeschaeftstypModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftstypModel();
}
/**
* @return GeschaeftstypRow[]
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
* @return GeschaeftstypRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return GeschaeftstypRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new GeschaeftstypRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}