<?php
namespace Nemundo\Meteo\Isd\Data\Country;
class CountryModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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

protected function loadModel() {
$this->tableName = "isd_country";
$this->aliasTableName = "isd_country";
$this->label = "Country";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "isd_country";
$this->id->externalTableName = "isd_country";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "isd_country_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->countryCode = new \Nemundo\Model\Type\Text\TextType($this);
$this->countryCode->tableName = "isd_country";
$this->countryCode->externalTableName = "isd_country";
$this->countryCode->fieldName = "country_code";
$this->countryCode->aliasFieldName = "isd_country_country_code";
$this->countryCode->label = "Country Code";
$this->countryCode->allowNullValue = false;
$this->countryCode->length = 10;

$this->country = new \Nemundo\Model\Type\Text\TextType($this);
$this->country->tableName = "isd_country";
$this->country->externalTableName = "isd_country";
$this->country->fieldName = "country";
$this->country->aliasFieldName = "isd_country_country";
$this->country->label = "Country";
$this->country->allowNullValue = false;
$this->country->length = 255;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "country_code";
$index->addType($this->countryCode);

}
}