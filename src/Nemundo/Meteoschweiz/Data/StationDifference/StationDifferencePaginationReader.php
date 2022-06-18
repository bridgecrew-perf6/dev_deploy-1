<?php
namespace Nemundo\Meteoschweiz\Data\StationDifference;
class StationDifferencePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
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
$row = new StationDifferenceRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}