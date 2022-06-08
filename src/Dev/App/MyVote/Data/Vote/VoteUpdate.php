<?php
namespace Dev\App\MyVote\Data\Vote;
use Nemundo\Model\Data\AbstractModelUpdate;
class VoteUpdate extends AbstractModelUpdate {
/**
* @var VoteModel
*/
public $model;

/**
* @var string
*/
public $voterId;

/**
* @var string
*/
public $abstimmungId;

/**
* @var string
*/
public $entscheidungId;

public function __construct() {
parent::__construct();
$this->model = new VoteModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->voterId, $this->voterId);
$this->typeValueList->setModelValue($this->model->abstimmungId, $this->abstimmungId);
$this->typeValueList->setModelValue($this->model->entscheidungId, $this->entscheidungId);
parent::update();
}
}