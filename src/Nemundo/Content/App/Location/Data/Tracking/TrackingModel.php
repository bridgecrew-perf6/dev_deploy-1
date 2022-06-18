<?php
namespace Nemundo\Content\App\Location\Data\Tracking;
class TrackingModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\DateTime\DateTimeType
*/
public $dateTime;

/**
* @var \Nemundo\Model\Type\Geo\GeoCoordinateType
*/
public $geoCoordinate;

protected function loadModel() {
$this->tableName = "location_tracking";
$this->aliasTableName = "location_tracking";
$this->label = "Tracking";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "location_tracking";
$this->id->externalTableName = "location_tracking";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "location_tracking_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->dateTime = new \Nemundo\Model\Type\DateTime\DateTimeType($this);
$this->dateTime->tableName = "location_tracking";
$this->dateTime->externalTableName = "location_tracking";
$this->dateTime->fieldName = "date_time";
$this->dateTime->aliasFieldName = "location_tracking_date_time";
$this->dateTime->label = "Date Time";
$this->dateTime->allowNullValue = false;

$this->geoCoordinate = new \Nemundo\Model\Type\Geo\GeoCoordinateType($this);
$this->geoCoordinate->tableName = "location_tracking";
$this->geoCoordinate->externalTableName = "location_tracking";
$this->geoCoordinate->fieldName = "geo_coordinate";
$this->geoCoordinate->aliasFieldName = "location_tracking_geo_coordinate";
$this->geoCoordinate->label = "Geo Coordinate";
$this->geoCoordinate->allowNullValue = false;

}
}