<?php
namespace Dev\App\MyVote\Data\Vote;
class VotePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
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
$row = new VoteRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}