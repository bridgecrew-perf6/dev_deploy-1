<?php
namespace Nemundo\Meteoschweiz\Data\TopListing;
class TopListingReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var TopListingModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TopListingModel();
}
/**
* @return TopListingRow[]
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
* @return TopListingRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return TopListingRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new TopListingRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}