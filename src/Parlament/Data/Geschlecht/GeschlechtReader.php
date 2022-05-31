<?php
namespace Parlament\Data\Geschlecht;
class GeschlechtReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var GeschlechtModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschlechtModel();
}
/**
* @return GeschlechtRow[]
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
* @return GeschlechtRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return GeschlechtRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new GeschlechtRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}