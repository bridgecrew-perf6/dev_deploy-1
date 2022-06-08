<?php
namespace Dev\App\MyVote\Data\Vote;
class VoteRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var VoteModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $voterId;

/**
* @var \Dev\App\MyVote\Data\Voter\VoterRow
*/
public $voter;

/**
* @var int
*/
public $abstimmungId;

/**
* @var \Parlament\Row\AbstimmungCustomRow
*/
public $abstimmung;

/**
* @var int
*/
public $entscheidungId;

/**
* @var \Parlament\Data\Entscheidung\EntscheidungRow
*/
public $entscheidung;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->voterId = $this->getModelValue($model->voterId);
if ($model->voter !== null) {
$this->loadDevAppMyVoteDataVoterVotervoterRow($model->voter);
}
$this->abstimmungId = intval($this->getModelValue($model->abstimmungId));
if ($model->abstimmung !== null) {
$this->loadParlamentDataAbstimmungAbstimmungabstimmungRow($model->abstimmung);
}
$this->entscheidungId = intval($this->getModelValue($model->entscheidungId));
if ($model->entscheidung !== null) {
$this->loadParlamentDataEntscheidungEntscheidungentscheidungRow($model->entscheidung);
}
}
private function loadDevAppMyVoteDataVoterVotervoterRow($model) {
$this->voter = new \Dev\App\MyVote\Data\Voter\VoterRow($this->row, $model);
}
private function loadParlamentDataAbstimmungAbstimmungabstimmungRow($model) {
$this->abstimmung = new \Parlament\Row\AbstimmungCustomRow($this->row, $model);
}
private function loadParlamentDataEntscheidungEntscheidungentscheidungRow($model) {
$this->entscheidung = new \Parlament\Data\Entscheidung\EntscheidungRow($this->row, $model);
}
}