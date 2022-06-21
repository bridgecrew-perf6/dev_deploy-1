<?php
namespace Parlament\Data\RatsmitgliedInteressenbindung;
class RatsmitgliedInteressenbindungReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var RatsmitgliedInteressenbindungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedInteressenbindungModel();
}
/**
* @return RatsmitgliedInteressenbindungRow[]
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
* @return RatsmitgliedInteressenbindungRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return RatsmitgliedInteressenbindungRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new RatsmitgliedInteressenbindungRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}