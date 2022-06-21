<?php
namespace Parlament\Data\Geschaeftsstatus;
class GeschaeftsstatusModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $geschaeftsstatus;

protected function loadModel() {
$this->tableName = "parlament_geschaeftsstatus";
$this->aliasTableName = "parlament_geschaeftsstatus";
$this->label = "Geschäftsstatus";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_geschaeftsstatus";
$this->id->externalTableName = "parlament_geschaeftsstatus";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_geschaeftsstatus_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->geschaeftsstatus = new \Nemundo\Model\Type\Text\TextType($this);
$this->geschaeftsstatus->tableName = "parlament_geschaeftsstatus";
$this->geschaeftsstatus->externalTableName = "parlament_geschaeftsstatus";
$this->geschaeftsstatus->fieldName = "geschaeftsstatus";
$this->geschaeftsstatus->aliasFieldName = "parlament_geschaeftsstatus_geschaeftsstatus";
$this->geschaeftsstatus->label = "Geschäftsstatus";
$this->geschaeftsstatus->allowNullValue = false;
$this->geschaeftsstatus->length = 255;

}
}