<?php
namespace Nemundo\Meteo\Isd\Data\DateContent;
class DateContentReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var DateContentModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DateContentModel();
}
/**
* @return DateContentRow[]
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
* @return DateContentRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return DateContentRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new DateContentRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}