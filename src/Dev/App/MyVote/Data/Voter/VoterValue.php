<?php
namespace Dev\App\MyVote\Data\Voter;
class VoterValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var VoterModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new VoterModel();
}
}