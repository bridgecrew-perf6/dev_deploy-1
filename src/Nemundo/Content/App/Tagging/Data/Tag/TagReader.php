<?php
namespace Nemundo\Content\App\Tagging\Data\Tag;
class TagReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var TagModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TagModel();
}
/**
* @return TagRow[]
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
* @return TagRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return TagRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new TagRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}