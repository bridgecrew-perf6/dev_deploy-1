<?php
namespace Parlament\Data\Beruf;
class BerufReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var BerufModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new BerufModel();
}
/**
* @return BerufRow[]
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
* @return BerufRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return BerufRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new BerufRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}