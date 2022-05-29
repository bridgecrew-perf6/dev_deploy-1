<?php
namespace Nemundo\Meteo\Isd\Data\Country;
class CountryExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $countryCode;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $country;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = CountryModel::class;
$this->externalTableName = "isd_country";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->countryCode = new \Nemundo\Model\Type\Text\TextType();
$this->countryCode->fieldName = "country_code";
$this->countryCode->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->countryCode->externalTableName = $this->externalTableName;
$this->countryCode->aliasFieldName = $this->countryCode->tableName . "_" . $this->countryCode->fieldName;
$this->countryCode->label = "Country Code";
$this->addType($this->countryCode);

$this->country = new \Nemundo\Model\Type\Text\TextType();
$this->country->fieldName = "country";
$this->country->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->country->externalTableName = $this->externalTableName;
$this->country->aliasFieldName = $this->country->tableName . "_" . $this->country->fieldName;
$this->country->label = "Country";
$this->addType($this->country);

}
}