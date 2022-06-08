<?php
namespace Dev\App\MyVote\Data\Voter;
class VoterRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var VoterModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $name;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->name = $this->getModelValue($model->name);
}
}