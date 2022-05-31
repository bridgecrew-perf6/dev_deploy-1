<?php
namespace Parlament\Data\Rat;
class RatReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var RatModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatModel();
}
/**
* @return RatRow[]
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
* @return RatRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return RatRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new RatRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}