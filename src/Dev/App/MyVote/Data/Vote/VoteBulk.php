<?php
namespace Dev\App\MyVote\Data\Vote;
class VoteBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var VoteModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->voterId, $this->voterId);
$this->typeValueList->setModelValue($this->model->abstimmungId, $this->abstimmungId);
$this->typeValueList->setModelValue($this->model->entscheidungId, $this->entscheidungId);
$id = parent::save();
return $id;
}
}