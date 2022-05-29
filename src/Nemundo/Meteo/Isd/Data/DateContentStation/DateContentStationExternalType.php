<?php
namespace Nemundo\Meteo\Isd\Data\DateContentStation;
class DateContentStationExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $dateContentId;

/**
* @var \Nemundo\Meteo\Isd\Data\DateContent\DateContentExternalType
*/
public $dateContent;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $stationId;

/**
* @var \Nemundo\Meteo\Isd\Data\Station\StationExternalType
*/
public $station;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = DateContentStationModel::class;
$this->externalTableName = "isd_date_content_station";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->dateContentId = new \Nemundo\Model\Type\Id\IdType();
$this->dateContentId->fieldName = "date_content";
$this->dateContentId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->dateContentId->aliasFieldName = $this->dateContentId->tableName ."_".$this->dateContentId->fieldName;
$this->dateContentId->label = "Date Content";
$this->addType($this->dateContentId);

$this->stationId = new \Nemundo\Model\Type\Id\IdType();
$this->stationId->fieldName = "station";
$this->stationId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->stationId->aliasFieldName = $this->stationId->tableName ."_".$this->stationId->fieldName;
$this->stationId->label = "Station";
$this->addType($this->stationId);

}
public function loadDateContent() {
if ($this->dateContent == null) {
$this->dateContent = new \Nemundo\Meteo\Isd\Data\DateContent\DateContentExternalType(null, $this->parentFieldName . "_date_content");
$this->dateContent->fieldName = "date_content";
$this->dateContent->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->dateContent->aliasFieldName = $this->dateContent->tableName ."_".$this->dateContent->fieldName;
$this->dateContent->label = "Date Content";
$this->addType($this->dateContent);
}
return $this;
}
public function loadStation() {
if ($this->station == null) {
$this->station = new \Nemundo\Meteo\Isd\Data\Station\StationExternalType(null, $this->parentFieldName . "_station");
$this->station->fieldName = "station";
$this->station->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->station->aliasFieldName = $this->station->tableName ."_".$this->station->fieldName;
$this->station->label = "Station";
$this->addType($this->station);
}
return $this;
}
}