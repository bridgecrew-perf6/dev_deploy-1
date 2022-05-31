<?php
namespace Parlament\Data\Fraktion;
class FraktionReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var FraktionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new FraktionModel();
}
/**
* @return \Parlament\Row\FraktionCustomRow[]
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
* @return \Parlament\Row\FraktionCustomRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return \Parlament\Row\FraktionCustomRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new \Parlament\Row\FraktionCustomRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}