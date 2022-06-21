<?php
namespace Parlament\Data\Geschaeftsstatus;
class GeschaeftsstatusReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var GeschaeftsstatusModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftsstatusModel();
}
/**
* @return GeschaeftsstatusRow[]
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
* @return GeschaeftsstatusRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return GeschaeftsstatusRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new GeschaeftsstatusRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}