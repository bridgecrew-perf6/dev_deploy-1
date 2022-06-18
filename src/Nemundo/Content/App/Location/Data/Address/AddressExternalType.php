<?php
namespace Nemundo\Content\App\Location\Data\Address;
class AddressExternalType extends \Nemundo\Model\Type\External\ExternalType {
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

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = AddressModel::class;
$this->externalTableName = "location_address";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->street = new \Nemundo\Model\Type\Text\TextType();
$this->street->fieldName = "street";
$this->street->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->street->externalTableName = $this->externalTableName;
$this->street->aliasFieldName = $this->street->tableName . "_" . $this->street->fieldName;
$this->street->label = "Street";
$this->addType($this->street);

$this->place = new \Nemundo\Model\Type\Text\TextType();
$this->place->fieldName = "place";
$this->place->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->place->externalTableName = $this->externalTableName;
$this->place->aliasFieldName = $this->place->tableName . "_" . $this->place->fieldName;
$this->place->label = "Place";
$this->addType($this->place);

}
}