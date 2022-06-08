<?php
namespace Dev\App\MyVote\Data\Vote;
class VoteModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalUniqueIdType
*/
public $voterId;

/**
* @var \Dev\App\MyVote\Data\Voter\VoterExternalType
*/
public $voter;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $abstimmungId;

/**
* @var \Parlament\Data\Abstimmung\AbstimmungExternalType
*/
public $abstimmung;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $entscheidungId;

/**
* @var \Parlament\Data\Entscheidung\EntscheidungExternalType
*/
public $entscheidung;

protected function loadModel() {
$this->tableName = "myvote_vote";
$this->aliasTableName = "myvote_vote";
$this->label = "Vote";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "myvote_vote";
$this->id->externalTableName = "myvote_vote";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "myvote_vote_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->voterId = new \Nemundo\Model\Type\External\Id\ExternalUniqueIdType($this);
$this->voterId->tableName = "myvote_vote";
$this->voterId->fieldName = "voter";
$this->voterId->aliasFieldName = "myvote_vote_voter";
$this->voterId->label = "Voter";
$this->voterId->allowNullValue = false;

$this->abstimmungId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->abstimmungId->tableName = "myvote_vote";
$this->abstimmungId->fieldName = "abstimmung";
$this->abstimmungId->aliasFieldName = "myvote_vote_abstimmung";
$this->abstimmungId->label = "Abstimmung";
$this->abstimmungId->allowNullValue = false;

$this->entscheidungId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->entscheidungId->tableName = "myvote_vote";
$this->entscheidungId->fieldName = "entscheidung";
$this->entscheidungId->aliasFieldName = "myvote_vote_entscheidung";
$this->entscheidungId->label = "Entscheidung";
$this->entscheidungId->allowNullValue = false;

}
public function loadVoter() {
if ($this->voter == null) {
$this->voter = new \Dev\App\MyVote\Data\Voter\VoterExternalType($this, "myvote_vote_voter");
$this->voter->tableName = "myvote_vote";
$this->voter->fieldName = "voter";
$this->voter->aliasFieldName = "myvote_vote_voter";
$this->voter->label = "Voter";
}
return $this;
}
public function loadAbstimmung() {
if ($this->abstimmung == null) {
$this->abstimmung = new \Parlament\Data\Abstimmung\AbstimmungExternalType($this, "myvote_vote_abstimmung");
$this->abstimmung->tableName = "myvote_vote";
$this->abstimmung->fieldName = "abstimmung";
$this->abstimmung->aliasFieldName = "myvote_vote_abstimmung";
$this->abstimmung->label = "Abstimmung";
}
return $this;
}
public function loadEntscheidung() {
if ($this->entscheidung == null) {
$this->entscheidung = new \Parlament\Data\Entscheidung\EntscheidungExternalType($this, "myvote_vote_entscheidung");
$this->entscheidung->tableName = "myvote_vote";
$this->entscheidung->fieldName = "entscheidung";
$this->entscheidung->aliasFieldName = "myvote_vote_entscheidung";
$this->entscheidung->label = "Entscheidung";
}
return $this;
}
}