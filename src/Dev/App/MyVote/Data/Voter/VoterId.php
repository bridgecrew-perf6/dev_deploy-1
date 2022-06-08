<?php
namespace Dev\App\MyVote\Data\Voter;
use Nemundo\Model\Id\AbstractModelIdValue;
class VoterId extends AbstractModelIdValue {
/**
* @var VoterModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new VoterModel();
}
}