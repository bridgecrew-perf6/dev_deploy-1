<?php
namespace Parlament\Data\AbstimmungRatsmitglied;
class AbstimmungRatsmitgliedModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

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
public $ratsmitgliedId;

/**
* @var \Parlament\Data\Ratsmitglied\RatsmitgliedExternalType
*/
public $ratsmitglied;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $entscheidungId;

/**
* @var \Parlament\Data\Entscheidung\EntscheidungExternalType
*/
public $entscheidung;

protected function loadModel() {
$this->tableName = "parlament_abstimmung_ratsmitglied";
$this->aliasTableName = "parlament_abstimmung_ratsmitglied";
$this->label = "Abstimmung Ratsmitglied";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_abstimmung_ratsmitglied";
$this->id->externalTableName = "parlament_abstimmung_ratsmitglied";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_abstimmung_ratsmitglied_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->abstimmungId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->abstimmungId->tableName = "parlament_abstimmung_ratsmitglied";
$this->abstimmungId->fieldName = "abstimmung";
$this->abstimmungId->aliasFieldName = "parlament_abstimmung_ratsmitglied_abstimmung";
$this->abstimmungId->label = "Abstimmung";
$this->abstimmungId->allowNullValue = false;

$this->ratsmitgliedId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->ratsmitgliedId->tableName = "parlament_abstimmung_ratsmitglied";
$this->ratsmitgliedId->fieldName = "ratsmitglied";
$this->ratsmitgliedId->aliasFieldName = "parlament_abstimmung_ratsmitglied_ratsmitglied";
$this->ratsmitgliedId->label = "Ratsmitglied";
$this->ratsmitgliedId->allowNullValue = false;

$this->entscheidungId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->entscheidungId->tableName = "parlament_abstimmung_ratsmitglied";
$this->entscheidungId->fieldName = "entscheidung";
$this->entscheidungId->aliasFieldName = "parlament_abstimmung_ratsmitglied_entscheidung";
$this->entscheidungId->label = "Entscheidung";
$this->entscheidungId->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "abstimmung";
$index->addType($this->abstimmungId);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "ratsmitglied";
$index->addType($this->ratsmitgliedId);

}
public function loadAbstimmung() {
if ($this->abstimmung == null) {
$this->abstimmung = new \Parlament\Data\Abstimmung\AbstimmungExternalType($this, "parlament_abstimmung_ratsmitglied_abstimmung");
$this->abstimmung->tableName = "parlament_abstimmung_ratsmitglied";
$this->abstimmung->fieldName = "abstimmung";
$this->abstimmung->aliasFieldName = "parlament_abstimmung_ratsmitglied_abstimmung";
$this->abstimmung->label = "Abstimmung";
}
return $this;
}
public function loadRatsmitglied() {
if ($this->ratsmitglied == null) {
$this->ratsmitglied = new \Parlament\Data\Ratsmitglied\RatsmitgliedExternalType($this, "parlament_abstimmung_ratsmitglied_ratsmitglied");
$this->ratsmitglied->tableName = "parlament_abstimmung_ratsmitglied";
$this->ratsmitglied->fieldName = "ratsmitglied";
$this->ratsmitglied->aliasFieldName = "parlament_abstimmung_ratsmitglied_ratsmitglied";
$this->ratsmitglied->label = "Ratsmitglied";
}
return $this;
}
public function loadEntscheidung() {
if ($this->entscheidung == null) {
$this->entscheidung = new \Parlament\Data\Entscheidung\EntscheidungExternalType($this, "parlament_abstimmung_ratsmitglied_entscheidung");
$this->entscheidung->tableName = "parlament_abstimmung_ratsmitglied";
$this->entscheidung->fieldName = "entscheidung";
$this->entscheidung->aliasFieldName = "parlament_abstimmung_ratsmitglied_entscheidung";
$this->entscheidung->label = "Entscheidung";
}
return $this;
}
}