<?php
namespace Dev\App\MyVote\Data\Vote;
class VoteExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $voterId;

/**
* @var \Dev\App\MyVote\Data\Voter\VoterExternalType
*/
public $voter;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $abstimmungId;

/**
* @var \Parlament\Data\Abstimmung\AbstimmungExternalType
*/
public $abstimmung;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $entscheidungId;

/**
* @var \Parlament\Data\Entscheidung\EntscheidungExternalType
*/
public $entscheidung;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = VoteModel::class;
$this->externalTableName = "myvote_vote";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->voterId = new \Nemundo\Model\Type\Id\IdType();
$this->voterId->fieldName = "voter";
$this->voterId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->voterId->aliasFieldName = $this->voterId->tableName ."_".$this->voterId->fieldName;
$this->voterId->label = "Voter";
$this->addType($this->voterId);

$this->abstimmungId = new \Nemundo\Model\Type\Id\IdType();
$this->abstimmungId->fieldName = "abstimmung";
$this->abstimmungId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->abstimmungId->aliasFieldName = $this->abstimmungId->tableName ."_".$this->abstimmungId->fieldName;
$this->abstimmungId->label = "Abstimmung";
$this->addType($this->abstimmungId);

$this->entscheidungId = new \Nemundo\Model\Type\Id\IdType();
$this->entscheidungId->fieldName = "entscheidung";
$this->entscheidungId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->entscheidungId->aliasFieldName = $this->entscheidungId->tableName ."_".$this->entscheidungId->fieldName;
$this->entscheidungId->label = "Entscheidung";
$this->addType($this->entscheidungId);

}
public function loadVoter() {
if ($this->voter == null) {
$this->voter = new \Dev\App\MyVote\Data\Voter\VoterExternalType(null, $this->parentFieldName . "_voter");
$this->voter->fieldName = "voter";
$this->voter->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->voter->aliasFieldName = $this->voter->tableName ."_".$this->voter->fieldName;
$this->voter->label = "Voter";
$this->addType($this->voter);
}
return $this;
}
public function loadAbstimmung() {
if ($this->abstimmung == null) {
$this->abstimmung = new \Parlament\Data\Abstimmung\AbstimmungExternalType(null, $this->parentFieldName . "_abstimmung");
$this->abstimmung->fieldName = "abstimmung";
$this->abstimmung->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->abstimmung->aliasFieldName = $this->abstimmung->tableName ."_".$this->abstimmung->fieldName;
$this->abstimmung->label = "Abstimmung";
$this->addType($this->abstimmung);
}
return $this;
}
public function loadEntscheidung() {
if ($this->entscheidung == null) {
$this->entscheidung = new \Parlament\Data\Entscheidung\EntscheidungExternalType(null, $this->parentFieldName . "_entscheidung");
$this->entscheidung->fieldName = "entscheidung";
$this->entscheidung->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->entscheidung->aliasFieldName = $this->entscheidung->tableName ."_".$this->entscheidung->fieldName;
$this->entscheidung->label = "Entscheidung";
$this->addType($this->entscheidung);
}
return $this;
}
}