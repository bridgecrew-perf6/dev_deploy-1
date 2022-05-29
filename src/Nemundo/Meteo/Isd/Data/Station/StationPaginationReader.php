<?php
namespace Nemundo\Meteo\Isd\Data\Station;
class StationPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var StationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StationModel();
}
/**
* @return StationRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new StationRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}