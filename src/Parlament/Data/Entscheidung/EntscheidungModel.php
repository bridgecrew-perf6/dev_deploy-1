<?php
namespace Parlament\Data\Entscheidung;
class EntscheidungModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $entscheidung;

protected function loadModel() {
$this->tableName = "parlament_entscheidung";
$this->aliasTableName = "parlament_entscheidung";
$this->label = "Entscheidung";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_entscheidung";
$this->id->externalTableName = "parlament_entscheidung";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_entscheidung_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->entscheidung = new \Nemundo\Model\Type\Text\TextType($this);
$this->entscheidung->tableName = "parlament_entscheidung";
$this->entscheidung->externalTableName = "parlament_entscheidung";
$this->entscheidung->fieldName = "entscheidung";
$this->entscheidung->aliasFieldName = "parlament_entscheidung_entscheidung";
$this->entscheidung->label = "Entscheidung";
$this->entscheidung->allowNullValue = false;
$this->entscheidung->length = 20;

}
}