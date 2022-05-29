<?php
namespace Nemundo\Meteo\Isd\Data\Measurement;
class MeasurementReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var MeasurementModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MeasurementModel();
}
/**
* @return MeasurementRow[]
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
* @return MeasurementRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return MeasurementRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new MeasurementRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}