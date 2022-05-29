<?php
namespace Nemundo\Meteo\Isd\Data\DownloadQueue;
class DownloadQueueExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $stationId;

/**
* @var \Nemundo\Meteo\Isd\Data\Station\StationExternalType
*/
public $station;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $year;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $finished;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = DownloadQueueModel::class;
$this->externalTableName = "isd_download_queue";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->stationId = new \Nemundo\Model\Type\Id\IdType();
$this->stationId->fieldName = "station";
$this->stationId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->stationId->aliasFieldName = $this->stationId->tableName ."_".$this->stationId->fieldName;
$this->stationId->label = "Station";
$this->addType($this->stationId);

$this->year = new \Nemundo\Model\Type\Number\NumberType();
$this->year->fieldName = "year";
$this->year->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->year->externalTableName = $this->externalTableName;
$this->year->aliasFieldName = $this->year->tableName . "_" . $this->year->fieldName;
$this->year->label = "Year";
$this->addType($this->year);

$this->finished = new \Nemundo\Model\Type\Number\YesNoType();
$this->finished->fieldName = "finished";
$this->finished->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->finished->externalTableName = $this->externalTableName;
$this->finished->aliasFieldName = $this->finished->tableName . "_" . $this->finished->fieldName;
$this->finished->label = "Finished";
$this->addType($this->finished);

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