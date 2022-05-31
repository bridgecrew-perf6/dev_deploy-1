<?php
namespace Parlament\Data\Rat;
class RatModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $rat;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $type;

protected function loadModel() {
$this->tableName = "parlament_rat";
$this->aliasTableName = "parlament_rat";
$this->label = "Rat";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_rat";
$this->id->externalTableName = "parlament_rat";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_rat_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->rat = new \Nemundo\Model\Type\Text\TextType($this);
$this->rat->tableName = "parlament_rat";
$this->rat->externalTableName = "parlament_rat";
$this->rat->fieldName = "rat";
$this->rat->aliasFieldName = "parlament_rat_rat";
$this->rat->label = "Rat";
$this->rat->allowNullValue = false;
$this->rat->length = 255;

$this->type = new \Nemundo\Model\Type\Text\TextType($this);
$this->type->tableName = "parlament_rat";
$this->type->externalTableName = "parlament_rat";
$this->type->fieldName = "type";
$this->type->aliasFieldName = "parlament_rat_type";
$this->type->label = "Type";
$this->type->allowNullValue = false;
$this->type->length = 1;

}
}