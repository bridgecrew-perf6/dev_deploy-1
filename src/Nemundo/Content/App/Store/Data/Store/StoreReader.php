<?php
namespace Nemundo\Content\App\Store\Data\Store;
class StoreReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var StoreModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StoreModel();
}
/**
* @return StoreRow[]
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
* @return StoreRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return StoreRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new StoreRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}