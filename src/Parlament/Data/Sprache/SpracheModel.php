<?php
namespace Parlament\Data\Sprache;
class SpracheModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $code;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $sprache;

protected function loadModel() {
$this->tableName = "parlament_sprache";
$this->aliasTableName = "parlament_sprache";
$this->label = "Sprache";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_sprache";
$this->id->externalTableName = "parlament_sprache";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_sprache_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->code = new \Nemundo\Model\Type\Text\TextType($this);
$this->code->tableName = "parlament_sprache";
$this->code->externalTableName = "parlament_sprache";
$this->code->fieldName = "code";
$this->code->aliasFieldName = "parlament_sprache_code";
$this->code->label = "Code";
$this->code->allowNullValue = false;
$this->code->length = 2;

$this->sprache = new \Nemundo\Model\Type\Text\TextType($this);
$this->sprache->tableName = "parlament_sprache";
$this->sprache->externalTableName = "parlament_sprache";
$this->sprache->fieldName = "sprache";
$this->sprache->aliasFieldName = "parlament_sprache_sprache";
$this->sprache->label = "Sprache";
$this->sprache->allowNullValue = false;
$this->sprache->length = 255;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "code";
$index->addType($this->code);

}
}