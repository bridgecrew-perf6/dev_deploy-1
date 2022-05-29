<?php
namespace Nemundo\Meteo\Isd\Data\Measurement;
class MeasurementPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
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
$row = new MeasurementRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}