<?php
namespace Dev\App\MyVote\Data\Voter;
class VoterPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
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
$row = new VoterRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}