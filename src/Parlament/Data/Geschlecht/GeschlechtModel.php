<?php
namespace Parlament\Data\Geschlecht;
class GeschlechtModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $geschlecht;

protected function loadModel() {
$this->tableName = "parlament_geschlecht";
$this->aliasTableName = "parlament_geschlecht";
$this->label = "Geschlecht";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_geschlecht";
$this->id->externalTableName = "parlament_geschlecht";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_geschlecht_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->geschlecht = new \Nemundo\Model\Type\Text\TextType($this);
$this->geschlecht->tableName = "parlament_geschlecht";
$this->geschlecht->externalTableName = "parlament_geschlecht";
$this->geschlecht->fieldName = "geschlecht";
$this->geschlecht->aliasFieldName = "parlament_geschlecht_geschlecht";
$this->geschlecht->label = "Geschlecht";
$this->geschlecht->allowNullValue = false;
$this->geschlecht->length = 20;

}
}