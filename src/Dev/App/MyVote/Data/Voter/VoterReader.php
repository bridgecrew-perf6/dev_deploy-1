<?php
namespace Dev\App\MyVote\Data\Voter;
class VoterReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var VoterModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new VoterModel();
}
/**
* @return VoterRow[]
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
* @return VoterRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return VoterRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new VoterRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}