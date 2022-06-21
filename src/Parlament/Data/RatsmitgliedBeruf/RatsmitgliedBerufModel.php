<?php
namespace Parlament\Data\RatsmitgliedBeruf;
class RatsmitgliedBerufModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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
public $berufId;

/**
* @var \Parlament\Data\Beruf\BerufExternalType
*/
public $beruf;

protected function loadModel() {
$this->tableName = "parlament_ratsmitglied_beruf";
$this->aliasTableName = "parlament_ratsmitglied_beruf";
$this->label = "Ratsmitglied Beruf";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_ratsmitglied_beruf";
$this->id->externalTableName = "parlament_ratsmitglied_beruf";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_ratsmitglied_beruf_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->ratsmitgliedId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->ratsmitgliedId->tableName = "parlament_ratsmitglied_beruf";
$this->ratsmitgliedId->fieldName = "ratsmitglied";
$this->ratsmitgliedId->aliasFieldName = "parlament_ratsmitglied_beruf_ratsmitglied";
$this->ratsmitgliedId->label = "Ratsmitglied";
$this->ratsmitgliedId->allowNullValue = false;

$this->berufId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->berufId->tableName = "parlament_ratsmitglied_beruf";
$this->berufId->fieldName = "beruf";
$this->berufId->aliasFieldName = "parlament_ratsmitglied_beruf_beruf";
$this->berufId->label = "Beruf";
$this->berufId->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "ratsmitglied_beruf";
$index->addType($this->ratsmitgliedId);
$index->addType($this->berufId);

}
public function loadRatsmitglied() {
if ($this->ratsmitglied == null) {
$this->ratsmitglied = new \Parlament\Data\Ratsmitglied\RatsmitgliedExternalType($this, "parlament_ratsmitglied_beruf_ratsmitglied");
$this->ratsmitglied->tableName = "parlament_ratsmitglied_beruf";
$this->ratsmitglied->fieldName = "ratsmitglied";
$this->ratsmitglied->aliasFieldName = "parlament_ratsmitglied_beruf_ratsmitglied";
$this->ratsmitglied->label = "Ratsmitglied";
}
return $this;
}
public function loadBeruf() {
if ($this->beruf == null) {
$this->beruf = new \Parlament\Data\Beruf\BerufExternalType($this, "parlament_ratsmitglied_beruf_beruf");
$this->beruf->tableName = "parlament_ratsmitglied_beruf";
$this->beruf->fieldName = "beruf";
$this->beruf->aliasFieldName = "parlament_ratsmitglied_beruf_beruf";
$this->beruf->label = "Beruf";
}
return $this;
}
}