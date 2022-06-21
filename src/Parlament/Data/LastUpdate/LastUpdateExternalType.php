<?php
namespace Parlament\Data\LastUpdate;
class LastUpdateExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\DateTime\DateTimeType
*/
public $lastUpdate;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = LastUpdateModel::class;
$this->externalTableName = "parlament_last_update";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->lastUpdate = new \Nemundo\Model\Type\DateTime\DateTimeType();
$this->lastUpdate->fieldName = "last_update";
$this->lastUpdate->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->lastUpdate->externalTableName = $this->externalTableName;
$this->lastUpdate->aliasFieldName = $this->lastUpdate->tableName . "_" . $this->lastUpdate->fieldName;
$this->lastUpdate->label = "Last Update";
$this->addType($this->lastUpdate);

}
}