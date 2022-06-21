<?php
namespace Parlament\Data\Interessenbindung;
class InteressenbindungReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var InteressenbindungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new InteressenbindungModel();
}
/**
* @return InteressenbindungRow[]
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
* @return InteressenbindungRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return InteressenbindungRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new InteressenbindungRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}