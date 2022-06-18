<?php
namespace Nemundo\Content\App\Location\Data\Address;
class AddressModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $street;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $place;

protected function loadModel() {
$this->tableName = "location_address";
$this->aliasTableName = "location_address";
$this->label = "Address";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "location_address";
$this->id->externalTableName = "location_address";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "location_address_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->street = new \Nemundo\Model\Type\Text\TextType($this);
$this->street->tableName = "location_address";
$this->street->externalTableName = "location_address";
$this->street->fieldName = "street";
$this->street->aliasFieldName = "location_address_street";
$this->street->label = "Street";
$this->street->allowNullValue = false;
$this->street->length = 255;

$this->place = new \Nemundo\Model\Type\Text\TextType($this);
$this->place->tableName = "location_address";
$this->place->externalTableName = "location_address";
$this->place->fieldName = "place";
$this->place->aliasFieldName = "location_address_place";
$this->place->label = "Place";
$this->place->allowNullValue = false;
$this->place->length = 255;

}
}