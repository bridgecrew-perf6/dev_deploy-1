<?php
namespace Nemundo\Meteo\Isd\Data\Station;
class StationModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $station;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $countryId;

/**
* @var \Nemundo\Meteo\Isd\Data\Country\CountryExternalType
*/
public $country;

/**
* @var \Nemundo\Model\Type\Geo\GeoCoordinateAltitudeType
*/
public $coordinate;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $icao;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $validFrom;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $validTo;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $active;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $stationCode;

protected function loadModel() {
$this->tableName = "isd_station";
$this->aliasTableName = "isd_station";
$this->label = "Station";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "isd_station";
$this->id->externalTableName = "isd_station";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "isd_station_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->station = new \Nemundo\Model\Type\Text\TextType($this);
$this->station->tableName = "isd_station";
$this->station->externalTableName = "isd_station";
$this->station->fieldName = "station";
$this->station->aliasFieldName = "isd_station_station";
$this->station->label = "Station";
$this->station->allowNullValue = false;
$this->station->length = 255;

$this->countryId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->countryId->tableName = "isd_station";
$this->countryId->fieldName = "country";
$this->countryId->aliasFieldName = "isd_station_country";
$this->countryId->label = "Country";
$this->countryId->allowNullValue = true;

$this->coordinate = new \Nemundo\Model\Type\Geo\GeoCoordinateAltitudeType($this);
$this->coordinate->tableName = "isd_station";
$this->coordinate->externalTableName = "isd_station";
$this->coordinate->fieldName = "coordinate";
$this->coordinate->aliasFieldName = "isd_station_coordinate";
$this->coordinate->label = "Coordinate";
$this->coordinate->allowNullValue = true;

$this->icao = new \Nemundo\Model\Type\Text\TextType($this);
$this->icao->tableName = "isd_station";
$this->icao->externalTableName = "isd_station";
$this->icao->fieldName = "icao";
$this->icao->aliasFieldName = "isd_station_icao";
$this->icao->label = "Icao";
$this->icao->allowNullValue = true;
$this->icao->length = 10;

$this->validFrom = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->validFrom->tableName = "isd_station";
$this->validFrom->externalTableName = "isd_station";
$this->validFrom->fieldName = "valid_from";
$this->validFrom->aliasFieldName = "isd_station_valid_from";
$this->validFrom->label = "Valid From";
$this->validFrom->allowNullValue = false;

$this->validTo = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->validTo->tableName = "isd_station";
$this->validTo->externalTableName = "isd_station";
$this->validTo->fieldName = "valid_to";
$this->validTo->aliasFieldName = "isd_station_valid_to";
$this->validTo->label = "Valid To";
$this->validTo->allowNullValue = false;

$this->active = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->active->tableName = "isd_station";
$this->active->externalTableName = "isd_station";
$this->active->fieldName = "active";
$this->active->aliasFieldName = "isd_station_active";
$this->active->label = "Active";
$this->active->allowNullValue = false;

$this->stationCode = new \Nemundo\Model\Type\Text\TextType($this);
$this->stationCode->tableName = "isd_station";
$this->stationCode->externalTableName = "isd_station";
$this->stationCode->fieldName = "station_code";
$this->stationCode->aliasFieldName = "isd_station_station_code";
$this->stationCode->label = "Station Code";
$this->stationCode->allowNullValue = false;
$this->stationCode->length = 10;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "station_code";
$index->addType($this->stationCode);

$index = new \Nemundo\Model\Definition\Index\ModelSearchIndex($this);
$index->indexName = "station";
$index->addType($this->station);

}
public function loadCountry() {
if ($this->country == null) {
$this->country = new \Nemundo\Meteo\Isd\Data\Country\CountryExternalType($this, "isd_station_country");
$this->country->tableName = "isd_station";
$this->country->fieldName = "country";
$this->country->aliasFieldName = "isd_station_country";
$this->country->label = "Country";
}
return $this;
}
}