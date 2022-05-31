<?php
namespace Parlament\Data\Geschaeft;
class GeschaeftReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var GeschaeftModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftModel();
}
/**
* @return \Parlament\Row\GeschaeftCustomRow[]
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
* @return \Parlament\Row\GeschaeftCustomRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return \Parlament\Row\GeschaeftCustomRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new \Parlament\Row\GeschaeftCustomRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}