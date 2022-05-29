<?php
namespace Nemundo\Meteo\Isd\Data\Station;
class StationExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $station;

/**
* @var \Nemundo\Model\Type\Id\IdType
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

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = StationModel::class;
$this->externalTableName = "isd_station";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->station = new \Nemundo\Model\Type\Text\TextType();
$this->station->fieldName = "station";
$this->station->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->station->externalTableName = $this->externalTableName;
$this->station->aliasFieldName = $this->station->tableName . "_" . $this->station->fieldName;
$this->station->label = "Station";
$this->addType($this->station);

$this->countryId = new \Nemundo\Model\Type\Id\IdType();
$this->countryId->fieldName = "country";
$this->countryId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->countryId->aliasFieldName = $this->countryId->tableName ."_".$this->countryId->fieldName;
$this->countryId->label = "Country";
$this->addType($this->countryId);

$this->coordinate = new \Nemundo\Model\Type\Geo\GeoCoordinateAltitudeType();
$this->coordinate->fieldName = "coordinate";
$this->coordinate->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->coordinate->externalTableName = $this->externalTableName;
$this->coordinate->aliasFieldName = $this->coordinate->tableName . "_" . $this->coordinate->fieldName;
$this->coordinate->label = "Coordinate";
$this->coordinate->createObject();
$this->addType($this->coordinate);

$this->icao = new \Nemundo\Model\Type\Text\TextType();
$this->icao->fieldName = "icao";
$this->icao->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->icao->externalTableName = $this->externalTableName;
$this->icao->aliasFieldName = $this->icao->tableName . "_" . $this->icao->fieldName;
$this->icao->label = "Icao";
$this->addType($this->icao);

$this->validFrom = new \Nemundo\Model\Type\DateTime\DateType();
$this->validFrom->fieldName = "valid_from";
$this->validFrom->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->validFrom->externalTableName = $this->externalTableName;
$this->validFrom->aliasFieldName = $this->validFrom->tableName . "_" . $this->validFrom->fieldName;
$this->validFrom->label = "Valid From";
$this->addType($this->validFrom);

$this->validTo = new \Nemundo\Model\Type\DateTime\DateType();
$this->validTo->fieldName = "valid_to";
$this->validTo->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->validTo->externalTableName = $this->externalTableName;
$this->validTo->aliasFieldName = $this->validTo->tableName . "_" . $this->validTo->fieldName;
$this->validTo->label = "Valid To";
$this->addType($this->validTo);

$this->active = new \Nemundo\Model\Type\Number\YesNoType();
$this->active->fieldName = "active";
$this->active->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->active->externalTableName = $this->externalTableName;
$this->active->aliasFieldName = $this->active->tableName . "_" . $this->active->fieldName;
$this->active->label = "Active";
$this->addType($this->active);

$this->stationCode = new \Nemundo\Model\Type\Text\TextType();
$this->stationCode->fieldName = "station_code";
$this->stationCode->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->stationCode->externalTableName = $this->externalTableName;
$this->stationCode->aliasFieldName = $this->stationCode->tableName . "_" . $this->stationCode->fieldName;
$this->stationCode->label = "Station Code";
$this->addType($this->stationCode);

}
public function loadCountry() {
if ($this->country == null) {
$this->country = new \Nemundo\Meteo\Isd\Data\Country\CountryExternalType(null, $this->parentFieldName . "_country");
$this->country->fieldName = "country";
$this->country->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->country->aliasFieldName = $this->country->tableName ."_".$this->country->fieldName;
$this->country->label = "Country";
$this->addType($this->country);
}
return $this;
}
}