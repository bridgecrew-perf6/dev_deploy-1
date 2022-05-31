<?php
namespace Parlament\Data\Thema;
class ThemaModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $thema;

protected function loadModel() {
$this->tableName = "parlament_thema";
$this->aliasTableName = "parlament_thema";
$this->label = "Thema";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_thema";
$this->id->externalTableName = "parlament_thema";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_thema_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->thema = new \Nemundo\Model\Type\Text\TextType($this);
$this->thema->tableName = "parlament_thema";
$this->thema->externalTableName = "parlament_thema";
$this->thema->fieldName = "thema";
$this->thema->aliasFieldName = "parlament_thema_thema";
$this->thema->label = "Thema";
$this->thema->allowNullValue = false;
$this->thema->length = 255;

}
}