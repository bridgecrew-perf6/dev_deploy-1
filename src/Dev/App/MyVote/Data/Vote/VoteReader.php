<?php
namespace Dev\App\MyVote\Data\Vote;
class VoteReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var VoteModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new VoteModel();
}
/**
* @return VoteRow[]
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
* @return VoteRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return VoteRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new VoteRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}