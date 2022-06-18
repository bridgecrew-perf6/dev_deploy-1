<?php
namespace Nemundo\Content\App\Location\Data\Address;
class AddressReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var AddressModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AddressModel();
}
/**
* @return AddressRow[]
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
* @return AddressRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return AddressRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new AddressRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}