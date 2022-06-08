<?php
namespace Dev\App\MyVote\Data\Vote;
class VoteCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var VoteModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new VoteModel();
}
}