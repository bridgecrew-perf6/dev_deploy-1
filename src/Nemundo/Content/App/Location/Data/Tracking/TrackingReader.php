<?php
namespace Nemundo\Content\App\Location\Data\Tracking;
class TrackingReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var TrackingModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TrackingModel();
}
/**
* @return TrackingRow[]
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
* @return TrackingRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return TrackingRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new TrackingRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}