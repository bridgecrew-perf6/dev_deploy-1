<?php
namespace Nemundo\Meteo\Isd\Data\Measurement;
use Nemundo\Model\Data\AbstractModelUpdate;
class MeasurementUpdate extends AbstractModelUpdate {
/**
* @var MeasurementModel
*/
public $model;

/**
* @var string
*/
public $stationId;

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

public function __construct() {
parent::__construct();
$this->model = new MeasurementModel();
$this->date = new \Nemundo\Core\Type\DateTime\Date();
$this->time = new \Nemundo\Core\Type\DateTime\Time();
$this->dateTime = new \Nemundo\Core\Type\DateTime\DateTime();
}
public function update() {
$this->typeValueList->setModelValue($this->model->stationId, $this->stationId);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->date, $this->typeValueList);
$property->setValue($this->date);
$property = new \Nemundo\Model\Data\Property\DateTime\TimeDataProperty($this->model->time, $this->typeValueList);
$property->setValue($this->time);
$property = new \Nemundo\Model\Data\Property\DateTime\DateTimeDataProperty($this->model->dateTime, $this->typeValueList);
$property->setValue($this->dateTime);
$this->typeValueList->setModelValue($this->model->temperatureValid, $this->temperatureValid);
if (!is_null($this->temperature)) $this->temperature = str_replace(",", ".", $this->temperature);
$this->typeValueList->setModelValue($this->model->temperature, $this->temperature);
$this->typeValueList->setModelValue($this->model->dewPointValid, $this->dewPointValid);
if (!is_null($this->dewPoint)) $this->dewPoint = str_replace(",", ".", $this->dewPoint);
$this->typeValueList->setModelValue($this->model->dewPoint, $this->dewPoint);
$this->typeValueList->setModelValue($this->model->qnhValid, $this->qnhValid);
if (!is_null($this->qnh)) $this->qnh = str_replace(",", ".", $this->qnh);
$this->typeValueList->setModelValue($this->model->qnh, $this->qnh);
$this->typeValueList->setModelValue($this->model->windDirection, $this->windDirection);
if (!is_null($this->wind)) $this->wind = str_replace(",", ".", $this->wind);
$this->typeValueList->setModelValue($this->model->wind, $this->wind);
$this->typeValueList->setModelValue($this->model->precipitationValid, $this->precipitationValid);
if (!is_null($this->precipitation)) $this->precipitation = str_replace(",", ".", $this->precipitation);
$this->typeValueList->setModelValue($this->model->precipitation, $this->precipitation);
$this->typeValueList->setModelValue($this->model->windValid, $this->windValid);
$this->typeValueList->setModelValue($this->model->windDirectionValid, $this->windDirectionValid);
$this->typeValueList->setModelValue($this->model->year, $this->year);
$this->typeValueList->setModelValue($this->model->month, $this->month);
parent::update();
}
}