<?php
namespace Dev\App\MyVote\Data\Vote;
class VoteValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var VoteModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new VoteModel();
}
}