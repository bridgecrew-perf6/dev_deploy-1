<?php
namespace Nemundo\Meteoschweiz\Data\MesswertStation;
class MesswertStationExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $stationCode;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $station;

/**
* @var \Nemundo\Model\Type\Geo\GeoCoordinateAltitudeType
*/
public $geoCoordinate;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = MesswertStationModel::class;
$this->externalTableName = "meteoschweiz_messwert_station";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->stationCode = new \Nemundo\Model\Type\Text\TextType();
$this->stationCode->fieldName = "station_code";
$this->stationCode->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->stationCode->externalTableName = $this->externalTableName;
$this->stationCode->aliasFieldName = $this->stationCode->tableName . "_" . $this->stationCode->fieldName;
$this->stationCode->label = "Station Code";
$this->addType($this->stationCode);

$this->station = new \Nemundo\Model\Type\Text\TextType();
$this->station->fieldName = "station";
$this->station->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->station->externalTableName = $this->externalTableName;
$this->station->aliasFieldName = $this->station->tableName . "_" . $this->station->fieldName;
$this->station->label = "Station";
$this->addType($this->station);

$this->geoCoordinate = new \Nemundo\Model\Type\Geo\GeoCoordinateAltitudeType();
$this->geoCoordinate->fieldName = "geo_coordinate";
$this->geoCoordinate->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geoCoordinate->externalTableName = $this->externalTableName;
$this->geoCoordinate->aliasFieldName = $this->geoCoordinate->tableName . "_" . $this->geoCoordinate->fieldName;
$this->geoCoordinate->label = "Geo Coordinate";
$this->geoCoordinate->createObject();
$this->addType($this->geoCoordinate);

}
}