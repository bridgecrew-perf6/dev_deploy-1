<?php
namespace Nemundo\Meteoschweiz\Data\Messwert;
class MesswertReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var MesswertModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertModel();
}
/**
* @return \Nemundo\Meteoschweiz\Row\MesswertCustomRow[]
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
* @return \Nemundo\Meteoschweiz\Row\MesswertCustomRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return \Nemundo\Meteoschweiz\Row\MesswertCustomRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new \Nemundo\Meteoschweiz\Row\MesswertCustomRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}