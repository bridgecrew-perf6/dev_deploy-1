<?php
namespace Nemundo\Meteo\Isd\Data\DateContentStation;
class DateContentStationReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var DateContentStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DateContentStationModel();
}
/**
* @return DateContentStationRow[]
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
* @return DateContentStationRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return DateContentStationRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new DateContentStationRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}