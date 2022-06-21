<?php
namespace Parlament\Data\Entscheidung;
class EntscheidungReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var EntscheidungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EntscheidungModel();
}
/**
* @return EntscheidungRow[]
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
* @return EntscheidungRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return EntscheidungRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new EntscheidungRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}