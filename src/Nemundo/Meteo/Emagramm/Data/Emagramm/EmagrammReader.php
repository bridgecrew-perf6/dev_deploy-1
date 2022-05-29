<?php
namespace Nemundo\Meteo\Emagramm\Data\Emagramm;
class EmagrammReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var EmagrammModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EmagrammModel();
}
/**
* @return EmagrammRow[]
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
* @return EmagrammRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return EmagrammRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new EmagrammRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}