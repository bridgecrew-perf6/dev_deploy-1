<?php
namespace Nemundo\Meteo\Emagramm\Data\Emagramm;
class EmagrammModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\File\ImageType
*/
public $image;

/**
* @var \Nemundo\Model\Type\DateTime\DateTimeType
*/
public $dateTime;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $locationId;

/**
* @var \Nemundo\Meteo\Emagramm\Data\Location\LocationExternalType
*/
public $location;

protected function loadModel() {
$this->tableName = "emagramm_emagramm";
$this->aliasTableName = "emagramm_emagramm";
$this->label = "Emagramm";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "emagramm_emagramm";
$this->id->externalTableName = "emagramm_emagramm";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "emagramm_emagramm_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->image = new \Nemundo\Model\Type\File\ImageType($this);
$this->image->tableName = "emagramm_emagramm";
$this->image->externalTableName = "emagramm_emagramm";
$this->image->fieldName = "image";
$this->image->aliasFieldName = "emagramm_emagramm_image";
$this->image->label = "Image";
$this->image->allowNullValue = false;

$this->dateTime = new \Nemundo\Model\Type\DateTime\DateTimeType($this);
$this->dateTime->tableName = "emagramm_emagramm";
$this->dateTime->externalTableName = "emagramm_emagramm";
$this->dateTime->fieldName = "date_time";
$this->dateTime->aliasFieldName = "emagramm_emagramm_date_time";
$this->dateTime->label = "Date Time";
$this->dateTime->allowNullValue = false;

$this->locationId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->locationId->tableName = "emagramm_emagramm";
$this->locationId->fieldName = "location";
$this->locationId->aliasFieldName = "emagramm_emagramm_location";
$this->locationId->label = "Location";
$this->locationId->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "location_date_time";
$index->addType($this->locationId);
$index->addType($this->dateTime);

}
public function loadLocation() {
if ($this->location == null) {
$this->location = new \Nemundo\Meteo\Emagramm\Data\Location\LocationExternalType($this, "emagramm_emagramm_location");
$this->location->tableName = "emagramm_emagramm";
$this->location->fieldName = "location";
$this->location->aliasFieldName = "emagramm_emagramm_location";
$this->location->label = "Location";
}
return $this;
}
}