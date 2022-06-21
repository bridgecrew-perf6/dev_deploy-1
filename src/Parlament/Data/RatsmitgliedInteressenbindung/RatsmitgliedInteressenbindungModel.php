<?php
namespace Parlament\Data\RatsmitgliedInteressenbindung;
class RatsmitgliedInteressenbindungModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $ratsmitgliedId;

/**
* @var \Parlament\Data\Ratsmitglied\RatsmitgliedExternalType
*/
public $ratsmitglied;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $interessenbindungId;

/**
* @var \Parlament\Data\Interessenbindung\InteressenbindungExternalType
*/
public $interessenbindung;

protected function loadModel() {
$this->tableName = "parlament_ratsmitglied_interessenbindung";
$this->aliasTableName = "parlament_ratsmitglied_interessenbindung";
$this->label = "Ratsmitglied Interessenbindung";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_ratsmitglied_interessenbindung";
$this->id->externalTableName = "parlament_ratsmitglied_interessenbindung";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_ratsmitglied_interessenbindung_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->ratsmitgliedId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->ratsmitgliedId->tableName = "parlament_ratsmitglied_interessenbindung";
$this->ratsmitgliedId->fieldName = "ratsmitglied";
$this->ratsmitgliedId->aliasFieldName = "parlament_ratsmitglied_interessenbindung_ratsmitglied";
$this->ratsmitgliedId->label = "Ratsmitglied";
$this->ratsmitgliedId->allowNullValue = false;

$this->interessenbindungId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->interessenbindungId->tableName = "parlament_ratsmitglied_interessenbindung";
$this->interessenbindungId->fieldName = "interessenbindung";
$this->interessenbindungId->aliasFieldName = "parlament_ratsmitglied_interessenbindung_interessenbindung";
$this->interessenbindungId->label = "Interessenbindung";
$this->interessenbindungId->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "ratsmitglied_interessenbindung";
$index->addType($this->ratsmitgliedId);
$index->addType($this->interessenbindungId);

}
public function loadRatsmitglied() {
if ($this->ratsmitglied == null) {
$this->ratsmitglied = new \Parlament\Data\Ratsmitglied\RatsmitgliedExternalType($this, "parlament_ratsmitglied_interessenbindung_ratsmitglied");
$this->ratsmitglied->tableName = "parlament_ratsmitglied_interessenbindung";
$this->ratsmitglied->fieldName = "ratsmitglied";
$this->ratsmitglied->aliasFieldName = "parlament_ratsmitglied_interessenbindung_ratsmitglied";
$this->ratsmitglied->label = "Ratsmitglied";
}
return $this;
}
public function loadInteressenbindung() {
if ($this->interessenbindung == null) {
$this->interessenbindung = new \Parlament\Data\Interessenbindung\InteressenbindungExternalType($this, "parlament_ratsmitglied_interessenbindung_interessenbindung");
$this->interessenbindung->tableName = "parlament_ratsmitglied_interessenbindung";
$this->interessenbindung->fieldName = "interessenbindung";
$this->interessenbindung->aliasFieldName = "parlament_ratsmitglied_interessenbindung_interessenbindung";
$this->interessenbindung->label = "Interessenbindung";
}
return $this;
}
}