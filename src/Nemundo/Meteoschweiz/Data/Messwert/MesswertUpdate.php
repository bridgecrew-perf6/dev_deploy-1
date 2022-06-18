<?php
namespace Nemundo\Meteoschweiz\Data\Messwert;
use Nemundo\Model\Data\AbstractModelUpdate;
class MesswertUpdate extends AbstractModelUpdate {
/**
* @var MesswertModel
*/
public $model;

/**
* @var string
*/
public $stationId;

/**
* @var float
*/
public $temperature;

/**
* @var string
*/
public $dateTimeId;

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

public function __construct() {
parent::__construct();
$this->model = new MesswertModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->stationId, $this->stationId);
if (!is_null($this->temperature)) $this->temperature = str_replace(",", ".", $this->temperature);
$this->typeValueList->setModelValue($this->model->temperature, $this->temperature);
$this->typeValueList->setModelValue($this->model->dateTimeId, $this->dateTimeId);
if (!is_null($this->qnh)) $this->qnh = str_replace(",", ".", $this->qnh);
$this->typeValueList->setModelValue($this->model->qnh, $this->qnh);
if (!is_null($this->qfe)) $this->qfe = str_replace(",", ".", $this->qfe);
$this->typeValueList->setModelValue($this->model->qfe, $this->qfe);
if (!is_null($this->qff)) $this->qff = str_replace(",", ".", $this->qff);
$this->typeValueList->setModelValue($this->model->qff, $this->qff);
if (!is_null($this->wind)) $this->wind = str_replace(",", ".", $this->wind);
$this->typeValueList->setModelValue($this->model->wind, $this->wind);
if (!is_null($this->windGust)) $this->windGust = str_replace(",", ".", $this->windGust);
$this->typeValueList->setModelValue($this->model->windGust, $this->windGust);
$this->typeValueList->setModelValue($this->model->windDirection, $this->windDirection);
$this->typeValueList->setModelValue($this->model->humidity, $this->humidity);
if (!is_null($this->dewPoint)) $this->dewPoint = str_replace(",", ".", $this->dewPoint);
$this->typeValueList->setModelValue($this->model->dewPoint, $this->dewPoint);
$this->typeValueList->setModelValue($this->model->hasQnh, $this->hasQnh);
$this->typeValueList->setModelValue($this->model->hasTemperature, $this->hasTemperature);
$this->typeValueList->setModelValue($this->model->hasWind, $this->hasWind);
if (!is_null($this->precipitation)) $this->precipitation = str_replace(",", ".", $this->precipitation);
$this->typeValueList->setModelValue($this->model->precipitation, $this->precipitation);
$this->typeValueList->setModelValue($this->model->sunshine, $this->sunshine);
$this->typeValueList->setModelValue($this->model->globalRadiation, $this->globalRadiation);
$this->typeValueList->setModelValue($this->model->hasSunshine, $this->hasSunshine);
$this->typeValueList->setModelValue($this->model->hasPrecipitation, $this->hasPrecipitation);
$this->typeValueList->setModelValue($this->model->hasQff, $this->hasQff);
$this->typeValueList->setModelValue($this->model->hasHumidity, $this->hasHumidity);
parent::update();
}
}