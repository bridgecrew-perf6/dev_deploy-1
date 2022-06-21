<?php
namespace Parlament\Data\KommissionFunktion;
class KommissionFunktionReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var KommissionFunktionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionFunktionModel();
}
/**
* @return KommissionFunktionRow[]
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
* @return KommissionFunktionRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return KommissionFunktionRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new KommissionFunktionRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}