<?php
namespace Parlament\Data\Interessenbindung;
class InteressenbindungModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $organisation;

protected function loadModel() {
$this->tableName = "parlament_interessenbindung";
$this->aliasTableName = "parlament_interessenbindung";
$this->label = "Interessenbindung";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_interessenbindung";
$this->id->externalTableName = "parlament_interessenbindung";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_interessenbindung_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->organisation = new \Nemundo\Model\Type\Text\TextType($this);
$this->organisation->tableName = "parlament_interessenbindung";
$this->organisation->externalTableName = "parlament_interessenbindung";
$this->organisation->fieldName = "organisation";
$this->organisation->aliasFieldName = "parlament_interessenbindung_organisation";
$this->organisation->label = "Organisation";
$this->organisation->allowNullValue = false;
$this->organisation->length = 255;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "organisation";
$index->addType($this->organisation);

}
}