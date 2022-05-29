<?php
namespace Nemundo\Meteo\Isd\Data\DownloadQueue;
class DownloadQueueRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var DownloadQueueModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $stationId;

/**
* @var \Nemundo\Meteo\Isd\Data\Station\StationRow
*/
public $station;

/**
* @var int
*/
public $year;

/**
* @var bool
*/
public $finished;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->stationId = intval($this->getModelValue($model->stationId));
if ($model->station !== null) {
$this->loadNemundoMeteoIsdDataStationStationstationRow($model->station);
}
$this->year = intval($this->getModelValue($model->year));
$this->finished = boolval($this->getModelValue($model->finished));
}
private function loadNemundoMeteoIsdDataStationStationstationRow($model) {
$this->station = new \Nemundo\Meteo\Isd\Data\Station\StationRow($this->row, $model);
}
}