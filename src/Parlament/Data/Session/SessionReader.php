<?php
namespace Parlament\Data\Session;
class SessionReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var SessionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new SessionModel();
}
/**
* @return SessionRow[]
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
* @return SessionRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return SessionRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new SessionRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}