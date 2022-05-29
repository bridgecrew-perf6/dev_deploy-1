<?php
namespace Nemundo\Meteo\Isd\Data\Measurement;
class MeasurementExternalType extends \Nemundo\Model\Type\External\ExternalType {
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
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $date;

/**
* @var \Nemundo\Model\Type\DateTime\TimeType
*/
public $time;

/**
* @var \Nemundo\Model\Type\DateTime\DateTimeType
*/
public $dateTime;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $temperatureValid;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $temperature;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $dewPointValid;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $dewPoint;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $qnhValid;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $qnh;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $windDirection;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $wind;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $precipitationValid;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $precipitation;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $windValid;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $windDirectionValid;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $year;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $month;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = MeasurementModel::class;
$this->externalTableName = "isd_measurement";
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

$this->date = new \Nemundo\Model\Type\DateTime\DateType();
$this->date->fieldName = "date";
$this->date->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->date->externalTableName = $this->externalTableName;
$this->date->aliasFieldName = $this->date->tableName . "_" . $this->date->fieldName;
$this->date->label = "Date";
$this->addType($this->date);

$this->time = new \Nemundo\Model\Type\DateTime\TimeType();
$this->time->fieldName = "time";
$this->time->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->time->externalTableName = $this->externalTableName;
$this->time->aliasFieldName = $this->time->tableName . "_" . $this->time->fieldName;
$this->time->label = "Time";
$this->addType($this->time);

$this->dateTime = new \Nemundo\Model\Type\DateTime\DateTimeType();
$this->dateTime->fieldName = "date_time";
$this->dateTime->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->dateTime->externalTableName = $this->externalTableName;
$this->dateTime->aliasFieldName = $this->dateTime->tableName . "_" . $this->dateTime->fieldName;
$this->dateTime->label = "Date Time";
$this->addType($this->dateTime);

$this->temperatureValid = new \Nemundo\Model\Type\Number\YesNoType();
$this->temperatureValid->fieldName = "temperature_valid";
$this->temperatureValid->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->temperatureValid->externalTableName = $this->externalTableName;
$this->temperatureValid->aliasFieldName = $this->temperatureValid->tableName . "_" . $this->temperatureValid->fieldName;
$this->temperatureValid->label = "Temperature Valid";
$this->addType($this->temperatureValid);

$this->temperature = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->temperature->fieldName = "temperature";
$this->temperature->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->temperature->externalTableName = $this->externalTableName;
$this->temperature->aliasFieldName = $this->temperature->tableName . "_" . $this->temperature->fieldName;
$this->temperature->label = "Temperature";
$this->addType($this->temperature);

$this->dewPointValid = new \Nemundo\Model\Type\Number\YesNoType();
$this->dewPointValid->fieldName = "dew_point_valid";
$this->dewPointValid->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->dewPointValid->externalTableName = $this->externalTableName;
$this->dewPointValid->aliasFieldName = $this->dewPointValid->tableName . "_" . $this->dewPointValid->fieldName;
$this->dewPointValid->label = "Dew Point Valid";
$this->addType($this->dewPointValid);

$this->dewPoint = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->dewPoint->fieldName = "dew_point";
$this->dewPoint->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->dewPoint->externalTableName = $this->externalTableName;
$this->dewPoint->aliasFieldName = $this->dewPoint->tableName . "_" . $this->dewPoint->fieldName;
$this->dewPoint->label = "Dew Point";
$this->addType($this->dewPoint);

$this->qnhValid = new \Nemundo\Model\Type\Number\YesNoType();
$this->qnhValid->fieldName = "qnh_valid";
$this->qnhValid->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->qnhValid->externalTableName = $this->externalTableName;
$this->qnhValid->aliasFieldName = $this->qnhValid->tableName . "_" . $this->qnhValid->fieldName;
$this->qnhValid->label = "QNH Valid";
$this->addType($this->qnhValid);

$this->qnh = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->qnh->fieldName = "qnh";
$this->qnh->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->qnh->externalTableName = $this->externalTableName;
$this->qnh->aliasFieldName = $this->qnh->tableName . "_" . $this->qnh->fieldName;
$this->qnh->label = "QNH";
$this->addType($this->qnh);

$this->windDirection = new \Nemundo\Model\Type\Number\NumberType();
$this->windDirection->fieldName = "wind_direction";
$this->windDirection->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->windDirection->externalTableName = $this->externalTableName;
$this->windDirection->aliasFieldName = $this->windDirection->tableName . "_" . $this->windDirection->fieldName;
$this->windDirection->label = "Wind Direction";
$this->addType($this->windDirection);

$this->wind = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->wind->fieldName = "wind";
$this->wind->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->wind->externalTableName = $this->externalTableName;
$this->wind->aliasFieldName = $this->wind->tableName . "_" . $this->wind->fieldName;
$this->wind->label = "Wind";
$this->addType($this->wind);

$this->precipitationValid = new \Nemundo\Model\Type\Number\YesNoType();
$this->precipitationValid->fieldName = "precipitation_valid";
$this->precipitationValid->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->precipitationValid->externalTableName = $this->externalTableName;
$this->precipitationValid->aliasFieldName = $this->precipitationValid->tableName . "_" . $this->precipitationValid->fieldName;
$this->precipitationValid->label = "Precipitation Valid";
$this->addType($this->precipitationValid);

$this->precipitation = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->precipitation->fieldName = "precipitation";
$this->precipitation->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->precipitation->externalTableName = $this->externalTableName;
$this->precipitation->aliasFieldName = $this->precipitation->tableName . "_" . $this->precipitation->fieldName;
$this->precipitation->label = "Precipitation";
$this->addType($this->precipitation);

$this->windValid = new \Nemundo\Model\Type\Number\YesNoType();
$this->windValid->fieldName = "wind_valid";
$this->windValid->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->windValid->externalTableName = $this->externalTableName;
$this->windValid->aliasFieldName = $this->windValid->tableName . "_" . $this->windValid->fieldName;
$this->windValid->label = "Wind Valid";
$this->addType($this->windValid);

$this->windDirectionValid = new \Nemundo\Model\Type\Number\YesNoType();
$this->windDirectionValid->fieldName = "wind_direction_valid";
$this->windDirectionValid->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->windDirectionValid->externalTableName = $this->externalTableName;
$this->windDirectionValid->aliasFieldName = $this->windDirectionValid->tableName . "_" . $this->windDirectionValid->fieldName;
$this->windDirectionValid->label = "Wind Direction Valid";
$this->addType($this->windDirectionValid);

$this->year = new \Nemundo\Model\Type\Number\NumberType();
$this->year->fieldName = "year";
$this->year->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->year->externalTableName = $this->externalTableName;
$this->year->aliasFieldName = $this->year->tableName . "_" . $this->year->fieldName;
$this->year->label = "Year";
$this->addType($this->year);

$this->month = new \Nemundo\Model\Type\Number\NumberType();
$this->month->fieldName = "month";
$this->month->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->month->externalTableName = $this->externalTableName;
$this->month->aliasFieldName = $this->month->tableName . "_" . $this->month->fieldName;
$this->month->label = "Month";
$this->addType($this->month);

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