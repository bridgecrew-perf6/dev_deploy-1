<?php
namespace Nemundo\Meteoschweiz\Data\MesswertStation;
class MesswertStationReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var MesswertStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertStationModel();
}
/**
* @return MesswertStationRow[]
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
* @return MesswertStationRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return MesswertStationRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new MesswertStationRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}