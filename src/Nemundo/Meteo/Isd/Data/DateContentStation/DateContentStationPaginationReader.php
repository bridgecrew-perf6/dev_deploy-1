<?php
namespace Nemundo\Meteo\Isd\Data\DateContentStation;
class DateContentStationPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
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
$row = new DateContentStationRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}