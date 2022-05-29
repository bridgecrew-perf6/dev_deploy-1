<?php
namespace Nemundo\Meteo\Emagramm\Data\Emagramm;
class EmagrammExternalType extends \Nemundo\Model\Type\External\ExternalType {
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
* @var \Nemundo\Model\Type\Id\IdType
*/
public $locationId;

/**
* @var \Nemundo\Meteo\Emagramm\Data\Location\LocationExternalType
*/
public $location;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = EmagrammModel::class;
$this->externalTableName = "emagramm_emagramm";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->image = new \Nemundo\Model\Type\File\ImageType();
$this->image->fieldName = "image";
$this->image->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->image->externalTableName = $this->externalTableName;
$this->image->aliasFieldName = $this->image->tableName . "_" . $this->image->fieldName;
$this->image->label = "Image";
$this->addType($this->image);

$this->dateTime = new \Nemundo\Model\Type\DateTime\DateTimeType();
$this->dateTime->fieldName = "date_time";
$this->dateTime->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->dateTime->externalTableName = $this->externalTableName;
$this->dateTime->aliasFieldName = $this->dateTime->tableName . "_" . $this->dateTime->fieldName;
$this->dateTime->label = "Date Time";
$this->addType($this->dateTime);

$this->locationId = new \Nemundo\Model\Type\Id\IdType();
$this->locationId->fieldName = "location";
$this->locationId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->locationId->aliasFieldName = $this->locationId->tableName ."_".$this->locationId->fieldName;
$this->locationId->label = "Location";
$this->addType($this->locationId);

}
public function loadLocation() {
if ($this->location == null) {
$this->location = new \Nemundo\Meteo\Emagramm\Data\Location\LocationExternalType(null, $this->parentFieldName . "_location");
$this->location->fieldName = "location";
$this->location->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->location->aliasFieldName = $this->location->tableName ."_".$this->location->fieldName;
$this->location->label = "Location";
$this->addType($this->location);
}
return $this;
}
}