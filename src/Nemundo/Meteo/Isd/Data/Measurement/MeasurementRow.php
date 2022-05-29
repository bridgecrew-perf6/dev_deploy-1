<?php
namespace Nemundo\Meteo\Isd\Data\Measurement;
class MeasurementRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var MeasurementModel
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
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $date;

/**
* @var \Nemundo\Core\Type\DateTime\Time
*/
public $time;

/**
* @var \Nemundo\Core\Type\DateTime\DateTime
*/
public $dateTime;

/**
* @var bool
*/
public $temperatureValid;

/**
* @var float
*/
public $temperature;

/**
* @var bool
*/
public $dewPointValid;

/**
* @var float
*/
public $dewPoint;

/**
* @var bool
*/
public $qnhValid;

/**
* @var float
*/
public $qnh;

/**
* @var int
*/
public $windDirection;

/**
* @var float
*/
public $wind;

/**
* @var bool
*/
public $precipitationValid;

/**
* @var float
*/
public $precipitation;

/**
* @var bool
*/
public $windValid;

/**
* @var bool
*/
public $windDirectionValid;

/**
* @var int
*/
public $year;

/**
* @var int
*/
public $month;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->stationId = intval($this->getModelValue($model->stationId));
if ($model->station !== null) {
$this->loadNemundoMeteoIsdDataStationStationstationRow($model->station);
}
$value = $this->getModelValue($model->date);
if ($value !== "0000-00-00") {
$this->date = new \Nemundo\Core\Type\DateTime\Date($this->getModelValue($model->date));
}
$this->time = new \Nemundo\Core\Type\DateTime\Time($this->getModelValue($model->time));
$this->dateTime = new \Nemundo\Core\Type\DateTime\DateTime($this->getModelValue($model->dateTime));
$this->temperatureValid = boolval($this->getModelValue($model->temperatureValid));
$this->temperature = floatval($this->getModelValue($model->temperature));
$this->dewPointValid = boolval($this->getModelValue($model->dewPointValid));
$this->dewPoint = floatval($this->getModelValue($model->dewPoint));
$this->qnhValid = boolval($this->getModelValue($model->qnhValid));
$this->qnh = floatval($this->getModelValue($model->qnh));
$this->windDirection = intval($this->getModelValue($model->windDirection));
$this->wind = floatval($this->getModelValue($model->wind));
$this->precipitationValid = boolval($this->getModelValue($model->precipitationValid));
$this->precipitation = floatval($this->getModelValue($model->precipitation));
$this->windValid = boolval($this->getModelValue($model->windValid));
$this->windDirectionValid = boolval($this->getModelValue($model->windDirectionValid));
$this->year = intval($this->getModelValue($model->year));
$this->month = intval($this->getModelValue($model->month));
}
private function loadNemundoMeteoIsdDataStationStationstationRow($model) {
$this->station = new \Nemundo\Meteo\Isd\Data\Station\StationRow($this->row, $model);
}
}