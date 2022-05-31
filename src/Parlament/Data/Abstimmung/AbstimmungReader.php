<?php
namespace Parlament\Data\Abstimmung;
class AbstimmungReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var AbstimmungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungModel();
}
/**
* @return \Parlament\Row\AbstimmungCustomRow[]
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
* @return \Parlament\Row\AbstimmungCustomRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return \Parlament\Row\AbstimmungCustomRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new \Parlament\Row\AbstimmungCustomRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}