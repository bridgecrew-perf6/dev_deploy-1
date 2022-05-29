<?php
namespace Nemundo\Meteo\Isd\Data\MeasurementDay;
class MeasurementDayReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var MeasurementDayModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MeasurementDayModel();
}
/**
* @return MeasurementDayRow[]
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
* @return MeasurementDayRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return MeasurementDayRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new MeasurementDayRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}