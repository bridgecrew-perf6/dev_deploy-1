<?php
namespace Dev\App\MyVote\Data\Voter;
class VoterDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var VoterModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new VoterModel();
}
}