<?php
namespace Nemundo\Meteoschweiz\Data\MesswertDateTime;
class MesswertDateTimeReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var MesswertDateTimeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertDateTimeModel();
}
/**
* @return MesswertDateTimeRow[]
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
* @return MesswertDateTimeRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return MesswertDateTimeRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new MesswertDateTimeRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}