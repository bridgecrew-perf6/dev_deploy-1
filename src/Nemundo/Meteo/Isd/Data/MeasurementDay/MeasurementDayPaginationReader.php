<?php
namespace Nemundo\Meteo\Isd\Data\MeasurementDay;
class MeasurementDayPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
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
$row = new MeasurementDayRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}