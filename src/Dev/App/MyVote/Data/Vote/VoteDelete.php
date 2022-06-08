<?php
namespace Dev\App\MyVote\Data\Vote;
class VoteDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var VoteModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new VoteModel();
}
}