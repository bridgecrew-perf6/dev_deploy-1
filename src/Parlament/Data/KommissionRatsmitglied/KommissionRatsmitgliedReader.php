<?php
namespace Parlament\Data\KommissionRatsmitglied;
class KommissionRatsmitgliedReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var KommissionRatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionRatsmitgliedModel();
}
/**
* @return KommissionRatsmitgliedRow[]
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
* @return KommissionRatsmitgliedRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return KommissionRatsmitgliedRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new KommissionRatsmitgliedRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}