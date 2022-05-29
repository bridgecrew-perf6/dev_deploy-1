<?php
namespace Nemundo\Meteo\Isd\Data\DateContentStation;
class DateContentStationRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var DateContentStationModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $dateContentId;

/**
* @var \Nemundo\Meteo\Isd\Data\DateContent\DateContentRow
*/
public $dateContent;

/**
* @var int
*/
public $stationId;

/**
* @var \Nemundo\Meteo\Isd\Data\Station\StationRow
*/
public $station;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->dateContentId = intval($this->getModelValue($model->dateContentId));
if ($model->dateContent !== null) {
$this->loadNemundoMeteoIsdDataDateContentDateContentdateContentRow($model->dateContent);
}
$this->stationId = intval($this->getModelValue($model->stationId));
if ($model->station !== null) {
$this->loadNemundoMeteoIsdDataStationStationstationRow($model->station);
}
}
private function loadNemundoMeteoIsdDataDateContentDateContentdateContentRow($model) {
$this->dateContent = new \Nemundo\Meteo\Isd\Data\DateContent\DateContentRow($this->row, $model);
}
private function loadNemundoMeteoIsdDataStationStationstationRow($model) {
$this->station = new \Nemundo\Meteo\Isd\Data\Station\StationRow($this->row, $model);
}
}