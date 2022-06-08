<?php
namespace Dev\App\MyVote\Data\Voter;
class VoterBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var VoterModel
*/
protected $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $name;

public function __construct() {
parent::__construct();
$this->model = new VoterModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->name, $this->name);
$id = parent::save();
return $id;
}
}