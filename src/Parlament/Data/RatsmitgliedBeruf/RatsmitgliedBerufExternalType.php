<?php
namespace Parlament\Data\RatsmitgliedBeruf;
class RatsmitgliedBerufExternalType extends \Nemundo\Model\Type\External\ExternalType {
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
public $berufId;

/**
* @var \Parlament\Data\Beruf\BerufExternalType
*/
public $beruf;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = RatsmitgliedBerufModel::class;
$this->externalTableName = "parlament_ratsmitglied_beruf";
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

$this->berufId = new \Nemundo\Model\Type\Id\IdType();
$this->berufId->fieldName = "beruf";
$this->berufId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->berufId->aliasFieldName = $this->berufId->tableName ."_".$this->berufId->fieldName;
$this->berufId->label = "Beruf";
$this->addType($this->berufId);

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
public function loadBeruf() {
if ($this->beruf == null) {
$this->beruf = new \Parlament\Data\Beruf\BerufExternalType(null, $this->parentFieldName . "_beruf");
$this->beruf->fieldName = "beruf";
$this->beruf->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->beruf->aliasFieldName = $this->beruf->tableName ."_".$this->beruf->fieldName;
$this->beruf->label = "Beruf";
$this->addType($this->beruf);
}
return $this;
}
}