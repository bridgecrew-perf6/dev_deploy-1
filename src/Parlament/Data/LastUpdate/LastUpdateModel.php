<?php
namespace Parlament\Data\LastUpdate;
class LastUpdateModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\DateTime\DateTimeType
*/
public $lastUpdate;

protected function loadModel() {
$this->tableName = "parlament_last_update";
$this->aliasTableName = "parlament_last_update";
$this->label = "Last Update";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_last_update";
$this->id->externalTableName = "parlament_last_update";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_last_update_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->lastUpdate = new \Nemundo\Model\Type\DateTime\DateTimeType($this);
$this->lastUpdate->tableName = "parlament_last_update";
$this->lastUpdate->externalTableName = "parlament_last_update";
$this->lastUpdate->fieldName = "last_update";
$this->lastUpdate->aliasFieldName = "parlament_last_update_last_update";
$this->lastUpdate->label = "Last Update";
$this->lastUpdate->allowNullValue = false;

}
}