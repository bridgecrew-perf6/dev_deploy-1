<?php
namespace Parlament\Data\RatsmitgliedBeruf;
class RatsmitgliedBerufReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var RatsmitgliedBerufModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedBerufModel();
}
/**
* @return RatsmitgliedBerufRow[]
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
* @return RatsmitgliedBerufRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return RatsmitgliedBerufRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new RatsmitgliedBerufRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}