<?php
namespace Parlament\Data\Kommission;
class KommissionReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var KommissionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionModel();
}
/**
* @return KommissionRow[]
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
* @return KommissionRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return KommissionRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new KommissionRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}