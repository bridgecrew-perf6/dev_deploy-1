<?php
namespace Nemundo\Meteo\Emagramm\Data\Location;
class LocationModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $location;

protected function loadModel() {
$this->tableName = "emagramm_location";
$this->aliasTableName = "emagramm_location";
$this->label = "Location";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "emagramm_location";
$this->id->externalTableName = "emagramm_location";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "emagramm_location_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->location = new \Nemundo\Model\Type\Text\TextType($this);
$this->location->tableName = "emagramm_location";
$this->location->externalTableName = "emagramm_location";
$this->location->fieldName = "location";
$this->location->aliasFieldName = "emagramm_location_location";
$this->location->label = "Location";
$this->location->allowNullValue = false;
$this->location->length = 50;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "location";
$index->addType($this->location);

}
}