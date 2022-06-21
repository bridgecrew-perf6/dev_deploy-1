<?php
namespace Parlament\Data\Beruf;
class BerufModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $beruf;

protected function loadModel() {
$this->tableName = "parlament_beruf";
$this->aliasTableName = "parlament_beruf";
$this->label = "Beruf";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_beruf";
$this->id->externalTableName = "parlament_beruf";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_beruf_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->beruf = new \Nemundo\Model\Type\Text\TextType($this);
$this->beruf->tableName = "parlament_beruf";
$this->beruf->externalTableName = "parlament_beruf";
$this->beruf->fieldName = "beruf";
$this->beruf->aliasFieldName = "parlament_beruf_beruf";
$this->beruf->label = "Beruf";
$this->beruf->allowNullValue = false;
$this->beruf->length = 255;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "beruf";
$index->addType($this->beruf);

}
}