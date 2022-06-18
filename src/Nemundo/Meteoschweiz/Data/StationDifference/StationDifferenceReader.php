<?php
namespace Nemundo\Meteoschweiz\Data\StationDifference;
class StationDifferenceReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var StationDifferenceModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StationDifferenceModel();
}
/**
* @return StationDifferenceRow[]
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
* @return StationDifferenceRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return StationDifferenceRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new StationDifferenceRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}