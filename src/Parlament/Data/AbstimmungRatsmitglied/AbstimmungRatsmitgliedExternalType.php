<?php
namespace Parlament\Data\AbstimmungRatsmitglied;
class AbstimmungRatsmitgliedExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

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
public $ratsmitgliedId;

/**
* @var \Parlament\Data\Ratsmitglied\RatsmitgliedExternalType
*/
public $ratsmitglied;

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
$this->externalModelClassName = AbstimmungRatsmitgliedModel::class;
$this->externalTableName = "parlament_abstimmung_ratsmitglied";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->abstimmungId = new \Nemundo\Model\Type\Id\IdType();
$this->abstimmungId->fieldName = "abstimmung";
$this->abstimmungId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->abstimmungId->aliasFieldName = $this->abstimmungId->tableName ."_".$this->abstimmungId->fieldName;
$this->abstimmungId->label = "Abstimmung";
$this->addType($this->abstimmungId);

$this->ratsmitgliedId = new \Nemundo\Model\Type\Id\IdType();
$this->ratsmitgliedId->fieldName = "ratsmitglied";
$this->ratsmitgliedId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->ratsmitgliedId->aliasFieldName = $this->ratsmitgliedId->tableName ."_".$this->ratsmitgliedId->fieldName;
$this->ratsmitgliedId->label = "Ratsmitglied";
$this->addType($this->ratsmitgliedId);

$this->entscheidungId = new \Nemundo\Model\Type\Id\IdType();
$this->entscheidungId->fieldName = "entscheidung";
$this->entscheidungId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->entscheidungId->aliasFieldName = $this->entscheidungId->tableName ."_".$this->entscheidungId->fieldName;
$this->entscheidungId->label = "Entscheidung";
$this->addType($this->entscheidungId);

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
public function loadRatsmitglied() {
if ($this->ratsmitglied == null) {
$this->ratsmitglied = new \Parlament\Data\Ratsmitglied\RatsmitgliedExternalType(null, $this->parentFieldName . "_ratsmitglied");
$this->ratsmitglied->fieldName = "ratsmitglied";
$this->ratsmitglied->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->ratsmitglied->aliasFieldName = $this->ratsmitglied->tableName ."_".$this->ratsmitglied->fieldName;
$this->ratsmitglied->label = "Ratsmitglied";
$this->addType($this->ratsmitglied);
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