<?php
namespace Nemundo\Meteoschweiz\Data\MesswertStation;
class MesswertStationModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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

protected function loadModel() {
$this->tableName = "meteoschweiz_messwert_station";
$this->aliasTableName = "meteoschweiz_messwert_station";
$this->label = "Messwert Station";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "meteoschweiz_messwert_station";
$this->id->externalTableName = "meteoschweiz_messwert_station";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "meteoschweiz_messwert_station_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->stationCode = new \Nemundo\Model\Type\Text\TextType($this);
$this->stationCode->tableName = "meteoschweiz_messwert_station";
$this->stationCode->externalTableName = "meteoschweiz_messwert_station";
$this->stationCode->fieldName = "station_code";
$this->stationCode->aliasFieldName = "meteoschweiz_messwert_station_station_code";
$this->stationCode->label = "Station Code";
$this->stationCode->allowNullValue = false;
$this->stationCode->length = 5;

$this->station = new \Nemundo\Model\Type\Text\TextType($this);
$this->station->tableName = "meteoschweiz_messwert_station";
$this->station->externalTableName = "meteoschweiz_messwert_station";
$this->station->fieldName = "station";
$this->station->aliasFieldName = "meteoschweiz_messwert_station_station";
$this->station->label = "Station";
$this->station->allowNullValue = false;
$this->station->length = 255;

$this->geoCoordinate = new \Nemundo\Model\Type\Geo\GeoCoordinateAltitudeType($this);
$this->geoCoordinate->tableName = "meteoschweiz_messwert_station";
$this->geoCoordinate->externalTableName = "meteoschweiz_messwert_station";
$this->geoCoordinate->fieldName = "geo_coordinate";
$this->geoCoordinate->aliasFieldName = "meteoschweiz_messwert_station_geo_coordinate";
$this->geoCoordinate->label = "Geo Coordinate";
$this->geoCoordinate->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "station_code";
$index->addType($this->stationCode);

}
}