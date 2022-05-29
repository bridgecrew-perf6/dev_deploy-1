<?php
namespace Nemundo\Meteo\Isd\Data\MeasurementDay;
class MeasurementDay extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var MeasurementDayModel
*/
protected $model;

/**
* @var string
*/
public $stationId;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $date;

/**
* @var float
*/
public $temperatureMax;

/**
* @var float
*/
public $temperatureMin;

/**
* @var float
*/
public $dewPointMax;

/**
* @var float
*/
public $dewPointMin;

/**
* @var float
*/
public $windMax;

/**
* @var int
*/
public $windDirectionMax;

/**
* @var float
*/
public $qnh;

/**
* @var float
*/
public $precipitation;

public function __construct() {
parent::__construct();
$this->model = new MeasurementDayModel();
$this->date = new \Nemundo\Core\Type\DateTime\Date();
}
public function save() {
$this->typeValueList->setModelValue($this->model->stationId, $this->stationId);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->date, $this->typeValueList);
$property->setValue($this->date);
if (!is_null($this->temperatureMax)) $this->temperatureMax = str_replace(",", ".", $this->temperatureMax);
$this->typeValueList->setModelValue($this->model->temperatureMax, $this->temperatureMax);
if (!is_null($this->temperatureMin)) $this->temperatureMin = str_replace(",", ".", $this->temperatureMin);
$this->typeValueList->setModelValue($this->model->temperatureMin, $this->temperatureMin);
if (!is_null($this->dewPointMax)) $this->dewPointMax = str_replace(",", ".", $this->dewPointMax);
$this->typeValueList->setModelValue($this->model->dewPointMax, $this->dewPointMax);
if (!is_null($this->dewPointMin)) $this->dewPointMin = str_replace(",", ".", $this->dewPointMin);
$this->typeValueList->setModelValue($this->model->dewPointMin, $this->dewPointMin);
if (!is_null($this->windMax)) $this->windMax = str_replace(",", ".", $this->windMax);
$this->typeValueList->setModelValue($this->model->windMax, $this->windMax);
$this->typeValueList->setModelValue($this->model->windDirectionMax, $this->windDirectionMax);
if (!is_null($this->qnh)) $this->qnh = str_replace(",", ".", $this->qnh);
$this->typeValueList->setModelValue($this->model->qnh, $this->qnh);
if (!is_null($this->precipitation)) $this->precipitation = str_replace(",", ".", $this->precipitation);
$this->typeValueList->setModelValue($this->model->precipitation, $this->precipitation);
$id = parent::save();
return $id;
}
}