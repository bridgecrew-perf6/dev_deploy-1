<?php
namespace Nemundo\Meteo\Isd\Data\DateContentStation;
class DateContentStationModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $dateContentId;

/**
* @var \Nemundo\Meteo\Isd\Data\DateContent\DateContentExternalType
*/
public $dateContent;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $stationId;

/**
* @var \Nemundo\Meteo\Isd\Data\Station\StationExternalType
*/
public $station;

protected function loadModel() {
$this->tableName = "isd_date_content_station";
$this->aliasTableName = "isd_date_content_station";
$this->label = "Date Content Station";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "isd_date_content_station";
$this->id->externalTableName = "isd_date_content_station";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "isd_date_content_station_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->dateContentId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->dateContentId->tableName = "isd_date_content_station";
$this->dateContentId->fieldName = "date_content";
$this->dateContentId->aliasFieldName = "isd_date_content_station_date_content";
$this->dateContentId->label = "Date Content";
$this->dateContentId->allowNullValue = true;

$this->stationId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->stationId->tableName = "isd_date_content_station";
$this->stationId->fieldName = "station";
$this->stationId->aliasFieldName = "isd_date_content_station_station";
$this->stationId->label = "Station";
$this->stationId->allowNullValue = true;

}
public function loadDateContent() {
if ($this->dateContent == null) {
$this->dateContent = new \Nemundo\Meteo\Isd\Data\DateContent\DateContentExternalType($this, "isd_date_content_station_date_content");
$this->dateContent->tableName = "isd_date_content_station";
$this->dateContent->fieldName = "date_content";
$this->dateContent->aliasFieldName = "isd_date_content_station_date_content";
$this->dateContent->label = "Date Content";
}
return $this;
}
public function loadStation() {
if ($this->station == null) {
$this->station = new \Nemundo\Meteo\Isd\Data\Station\StationExternalType($this, "isd_date_content_station_station");
$this->station->tableName = "isd_date_content_station";
$this->station->fieldName = "station";
$this->station->aliasFieldName = "isd_date_content_station_station";
$this->station->label = "Station";
}
return $this;
}
}