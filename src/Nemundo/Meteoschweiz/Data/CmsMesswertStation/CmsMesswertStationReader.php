<?php
namespace Nemundo\Meteoschweiz\Data\CmsMesswertStation;
class CmsMesswertStationReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var CmsMesswertStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CmsMesswertStationModel();
}
/**
* @return CmsMesswertStationRow[]
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
* @return CmsMesswertStationRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return CmsMesswertStationRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new CmsMesswertStationRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}