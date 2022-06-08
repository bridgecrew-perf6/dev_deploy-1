<?php
namespace Dev\App\MyVote\Data\Voter;
use Nemundo\Model\Data\AbstractModelUpdate;
class VoterUpdate extends AbstractModelUpdate {
/**
* @var VoterModel
*/
public $model;

/**
* @var string
*/
public $name;

public function __construct() {
parent::__construct();
$this->model = new VoterModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->name, $this->name);
parent::update();
}
}