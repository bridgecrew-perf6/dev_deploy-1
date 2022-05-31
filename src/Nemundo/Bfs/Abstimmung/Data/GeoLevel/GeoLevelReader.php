<?php
namespace Nemundo\Bfs\Abstimmung\Data\GeoLevel;
class GeoLevelReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var GeoLevelModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeoLevelModel();
}
/**
* @return GeoLevelRow[]
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
* @return GeoLevelRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return GeoLevelRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new GeoLevelRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}