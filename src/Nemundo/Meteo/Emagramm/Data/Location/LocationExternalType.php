<?php
namespace Nemundo\Meteo\Emagramm\Data\Location;
class LocationExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $location;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = LocationModel::class;
$this->externalTableName = "emagramm_location";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->location = new \Nemundo\Model\Type\Text\TextType();
$this->location->fieldName = "location";
$this->location->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->location->externalTableName = $this->externalTableName;
$this->location->aliasFieldName = $this->location->tableName . "_" . $this->location->fieldName;
$this->location->label = "Location";
$this->addType($this->location);

}
}