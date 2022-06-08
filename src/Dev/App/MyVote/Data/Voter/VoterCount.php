<?php
namespace Dev\App\MyVote\Data\Voter;
class VoterCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var VoterModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new VoterModel();
}
}