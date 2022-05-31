<?php
namespace Parlament\Data\AbstimmungRatsmitglied;
class AbstimmungRatsmitgliedReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var AbstimmungRatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungRatsmitgliedModel();
}
/**
* @return AbstimmungRatsmitgliedRow[]
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
* @return AbstimmungRatsmitgliedRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return AbstimmungRatsmitgliedRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new AbstimmungRatsmitgliedRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}