<?php
namespace Nemundo\Meteo\Isd\Data\MeasurementDay;
class MeasurementDayRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var MeasurementDayModel
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
$this->temperatureMax = floatval($this->getModelValue($model->temperatureMax));
$this->temperatureMin = floatval($this->getModelValue($model->temperatureMin));
$this->dewPointMax = floatval($this->getModelValue($model->dewPointMax));
$this->dewPointMin = floatval($this->getModelValue($model->dewPointMin));
$this->windMax = floatval($this->getModelValue($model->windMax));
$this->windDirectionMax = intval($this->getModelValue($model->windDirectionMax));
$this->qnh = floatval($this->getModelValue($model->qnh));
$this->precipitation = floatval($this->getModelValue($model->precipitation));
}
private function loadNemundoMeteoIsdDataStationStationstationRow($model) {
$this->station = new \Nemundo\Meteo\Isd\Data\Station\StationRow($this->row, $model);
}
}