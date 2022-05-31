<?php
namespace Parlament\Data\Ratsmitglied;
class RatsmitgliedReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var RatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedModel();
}
/**
* @return \Parlament\Row\RatsmitgliedCustomRow[]
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
* @return \Parlament\Row\RatsmitgliedCustomRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return \Parlament\Row\RatsmitgliedCustomRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new \Parlament\Row\RatsmitgliedCustomRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}