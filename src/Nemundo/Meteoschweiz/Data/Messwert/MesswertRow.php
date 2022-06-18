<?php
namespace Nemundo\Meteoschweiz\Data\Messwert;
class MesswertRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var MesswertModel
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
* @var \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationRow
*/
public $station;

/**
* @var float
*/
public $temperature;

/**
* @var int
*/
public $dateTimeId;

/**
* @var \Nemundo\Meteoschweiz\Data\MesswertDateTime\MesswertDateTimeRow
*/
public $dateTime;

/**
* @var float
*/
public $qnh;

/**
* @var float
*/
public $qfe;

/**
* @var float
*/
public $qff;

/**
* @var float
*/
public $wind;

/**
* @var float
*/
public $windGust;

/**
* @var int
*/
public $windDirection;

/**
* @var int
*/
public $humidity;

/**
* @var float
*/
public $dewPoint;

/**
* @var bool
*/
public $hasQnh;

/**
* @var bool
*/
public $hasTemperature;

/**
* @var bool
*/
public $hasWind;

/**
* @var float
*/
public $precipitation;

/**
* @var int
*/
public $sunshine;

/**
* @var int
*/
public $globalRadiation;

/**
* @var bool
*/
public $hasSunshine;

/**
* @var bool
*/
public $hasPrecipitation;

/**
* @var bool
*/
public $hasQff;

/**
* @var bool
*/
public $hasHumidity;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->stationId = intval($this->getModelValue($model->stationId));
if ($model->station !== null) {
$this->loadNemundoMeteoschweizDataMesswertStationMesswertStationstationRow($model->station);
}
$this->temperature = floatval($this->getModelValue($model->temperature));
$this->dateTimeId = intval($this->getModelValue($model->dateTimeId));
if ($model->dateTime !== null) {
$this->loadNemundoMeteoschweizDataMesswertDateTimeMesswertDateTimedateTimeRow($model->dateTime);
}
$this->qnh = floatval($this->getModelValue($model->qnh));
$this->qfe = floatval($this->getModelValue($model->qfe));
$this->qff = floatval($this->getModelValue($model->qff));
$this->wind = floatval($this->getModelValue($model->wind));
$this->windGust = floatval($this->getModelValue($model->windGust));
$this->windDirection = intval($this->getModelValue($model->windDirection));
$this->humidity = intval($this->getModelValue($model->humidity));
$this->dewPoint = floatval($this->getModelValue($model->dewPoint));
$this->hasQnh = boolval($this->getModelValue($model->hasQnh));
$this->hasTemperature = boolval($this->getModelValue($model->hasTemperature));
$this->hasWind = boolval($this->getModelValue($model->hasWind));
$this->precipitation = floatval($this->getModelValue($model->precipitation));
$this->sunshine = intval($this->getModelValue($model->sunshine));
$this->globalRadiation = intval($this->getModelValue($model->globalRadiation));
$this->hasSunshine = boolval($this->getModelValue($model->hasSunshine));
$this->hasPrecipitation = boolval($this->getModelValue($model->hasPrecipitation));
$this->hasQff = boolval($this->getModelValue($model->hasQff));
$this->hasHumidity = boolval($this->getModelValue($model->hasHumidity));
}
private function loadNemundoMeteoschweizDataMesswertStationMesswertStationstationRow($model) {
$this->station = new \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationRow($this->row, $model);
}
private function loadNemundoMeteoschweizDataMesswertDateTimeMesswertDateTimedateTimeRow($model) {
$this->dateTime = new \Nemundo\Meteoschweiz\Data\MesswertDateTime\MesswertDateTimeRow($this->row, $model);
}
}