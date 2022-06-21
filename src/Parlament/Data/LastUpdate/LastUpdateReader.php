<?php
namespace Parlament\Data\LastUpdate;
class LastUpdateReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var LastUpdateModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LastUpdateModel();
}
/**
* @return LastUpdateRow[]
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
* @return LastUpdateRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return LastUpdateRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new LastUpdateRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}