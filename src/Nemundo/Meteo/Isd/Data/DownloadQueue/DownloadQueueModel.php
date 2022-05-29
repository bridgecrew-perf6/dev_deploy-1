<?php
namespace Nemundo\Meteo\Isd\Data\DownloadQueue;
class DownloadQueueModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
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

protected function loadModel() {
$this->tableName = "isd_download_queue";
$this->aliasTableName = "isd_download_queue";
$this->label = "Download Queue";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "isd_download_queue";
$this->id->externalTableName = "isd_download_queue";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "isd_download_queue_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->stationId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->stationId->tableName = "isd_download_queue";
$this->stationId->fieldName = "station";
$this->stationId->aliasFieldName = "isd_download_queue_station";
$this->stationId->label = "Station";
$this->stationId->allowNullValue = false;

$this->year = new \Nemundo\Model\Type\Number\NumberType($this);
$this->year->tableName = "isd_download_queue";
$this->year->externalTableName = "isd_download_queue";
$this->year->fieldName = "year";
$this->year->aliasFieldName = "isd_download_queue_year";
$this->year->label = "Year";
$this->year->allowNullValue = false;

$this->finished = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->finished->tableName = "isd_download_queue";
$this->finished->externalTableName = "isd_download_queue";
$this->finished->fieldName = "finished";
$this->finished->aliasFieldName = "isd_download_queue_finished";
$this->finished->label = "Finished";
$this->finished->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "station_year";
$index->addType($this->stationId);
$index->addType($this->year);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "station_year_finished";
$index->addType($this->stationId);
$index->addType($this->year);
$index->addType($this->finished);

}
public function loadStation() {
if ($this->station == null) {
$this->station = new \Nemundo\Meteo\Isd\Data\Station\StationExternalType($this, "isd_download_queue_station");
$this->station->tableName = "isd_download_queue";
$this->station->fieldName = "station";
$this->station->aliasFieldName = "isd_download_queue_station";
$this->station->label = "Station";
}
return $this;
}
}