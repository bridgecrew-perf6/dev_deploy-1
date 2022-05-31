<?php
namespace Parlament\Data\Sprache;
class SpracheReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var SpracheModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new SpracheModel();
}
/**
* @return SpracheRow[]
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
* @return SpracheRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return SpracheRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new SpracheRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}