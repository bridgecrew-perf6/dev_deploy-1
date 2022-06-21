<?php
namespace Nemundo\Bfs\Abstimmung\Data\Abstimmung;
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
* @return AbstimmungRow[]
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
* @return AbstimmungRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return AbstimmungRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new AbstimmungRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}