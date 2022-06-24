<?php
namespace Dev\App\Wetzikon\Data\PoiBild;
class PoiBildReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var PoiBildModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new PoiBildModel();
}
/**
* @return PoiBildRow[]
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
* @return PoiBildRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return PoiBildRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new PoiBildRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}