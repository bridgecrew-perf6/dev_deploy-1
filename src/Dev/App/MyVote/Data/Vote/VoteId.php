<?php
namespace Dev\App\MyVote\Data\Vote;
use Nemundo\Model\Id\AbstractModelIdValue;
class VoteId extends AbstractModelIdValue {
/**
* @var VoteModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new VoteModel();
}
}