<?php
namespace Parlament\Data\RatsmitgliedInteressenbindung;
class RatsmitgliedInteressenbindungExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

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
public $interessenbindungId;

/**
* @var \Parlament\Data\Interessenbindung\InteressenbindungExternalType
*/
public $interessenbindung;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = RatsmitgliedInteressenbindungModel::class;
$this->externalTableName = "parlament_ratsmitglied_interessenbindung";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->ratsmitgliedId = new \Nemundo\Model\Type\Id\IdType();
$this->ratsmitgliedId->fieldName = "ratsmitglied";
$this->ratsmitgliedId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->ratsmitgliedId->aliasFieldName = $this->ratsmitgliedId->tableName ."_".$this->ratsmitgliedId->fieldName;
$this->ratsmitgliedId->label = "Ratsmitglied";
$this->addType($this->ratsmitgliedId);

$this->interessenbindungId = new \Nemundo\Model\Type\Id\IdType();
$this->interessenbindungId->fieldName = "interessenbindung";
$this->interessenbindungId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->interessenbindungId->aliasFieldName = $this->interessenbindungId->tableName ."_".$this->interessenbindungId->fieldName;
$this->interessenbindungId->label = "Interessenbindung";
$this->addType($this->interessenbindungId);

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
public function loadInteressenbindung() {
if ($this->interessenbindung == null) {
$this->interessenbindung = new \Parlament\Data\Interessenbindung\InteressenbindungExternalType(null, $this->parentFieldName . "_interessenbindung");
$this->interessenbindung->fieldName = "interessenbindung";
$this->interessenbindung->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->interessenbindung->aliasFieldName = $this->interessenbindung->tableName ."_".$this->interessenbindung->fieldName;
$this->interessenbindung->label = "Interessenbindung";
$this->addType($this->interessenbindung);
}
return $this;
}
}