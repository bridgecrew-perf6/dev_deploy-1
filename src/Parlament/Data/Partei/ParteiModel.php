<?php
namespace Parlament\Data\Partei;
class ParteiModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $abkuerzung;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $partei;

protected function loadModel() {
$this->tableName = "parlament_partei";
$this->aliasTableName = "parlament_partei";
$this->label = "Partei";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_partei";
$this->id->externalTableName = "parlament_partei";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_partei_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->abkuerzung = new \Nemundo\Model\Type\Text\TextType($this);
$this->abkuerzung->tableName = "parlament_partei";
$this->abkuerzung->externalTableName = "parlament_partei";
$this->abkuerzung->fieldName = "abkuerzung";
$this->abkuerzung->aliasFieldName = "parlament_partei_abkuerzung";
$this->abkuerzung->label = "Abkürzung";
$this->abkuerzung->allowNullValue = false;
$this->abkuerzung->length = 10;

$this->partei = new \Nemundo\Model\Type\Text\TextType($this);
$this->partei->tableName = "parlament_partei";
$this->partei->externalTableName = "parlament_partei";
$this->partei->fieldName = "partei";
$this->partei->aliasFieldName = "parlament_partei_partei";
$this->partei->label = "Partei";
$this->partei->allowNullValue = false;
$this->partei->length = 255;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "abkuerzung";
$index->addType($this->abkuerzung);

}
}