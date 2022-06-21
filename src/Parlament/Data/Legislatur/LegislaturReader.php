<?php
namespace Parlament\Data\Legislatur;
class LegislaturReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var LegislaturModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LegislaturModel();
}
/**
* @return LegislaturRow[]
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
* @return LegislaturRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return LegislaturRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new LegislaturRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}