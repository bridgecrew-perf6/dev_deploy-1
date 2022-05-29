<?php
namespace Nemundo\Meteo\Isd\Data\Measurement;
class MeasurementModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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

protected function loadModel() {
$this->tableName = "isd_measurement";
$this->aliasTableName = "isd_measurement";
$this->label = "Measurement";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "isd_measurement";
$this->id->externalTableName = "isd_measurement";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "isd_measurement_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->stationId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->stationId->tableName = "isd_measurement";
$this->stationId->fieldName = "station";
$this->stationId->aliasFieldName = "isd_measurement_station";
$this->stationId->label = "Station";
$this->stationId->allowNullValue = false;

$this->date = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->date->tableName = "isd_measurement";
$this->date->externalTableName = "isd_measurement";
$this->date->fieldName = "date";
$this->date->aliasFieldName = "isd_measurement_date";
$this->date->label = "Date";
$this->date->allowNullValue = false;

$this->time = new \Nemundo\Model\Type\DateTime\TimeType($this);
$this->time->tableName = "isd_measurement";
$this->time->externalTableName = "isd_measurement";
$this->time->fieldName = "time";
$this->time->aliasFieldName = "isd_measurement_time";
$this->time->label = "Time";
$this->time->allowNullValue = false;

$this->dateTime = new \Nemundo\Model\Type\DateTime\DateTimeType($this);
$this->dateTime->tableName = "isd_measurement";
$this->dateTime->externalTableName = "isd_measurement";
$this->dateTime->fieldName = "date_time";
$this->dateTime->aliasFieldName = "isd_measurement_date_time";
$this->dateTime->label = "Date Time";
$this->dateTime->allowNullValue = false;

$this->temperatureValid = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->temperatureValid->tableName = "isd_measurement";
$this->temperatureValid->externalTableName = "isd_measurement";
$this->temperatureValid->fieldName = "temperature_valid";
$this->temperatureValid->aliasFieldName = "isd_measurement_temperature_valid";
$this->temperatureValid->label = "Temperature Valid";
$this->temperatureValid->allowNullValue = false;

$this->temperature = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->temperature->tableName = "isd_measurement";
$this->temperature->externalTableName = "isd_measurement";
$this->temperature->fieldName = "temperature";
$this->temperature->aliasFieldName = "isd_measurement_temperature";
$this->temperature->label = "Temperature";
$this->temperature->allowNullValue = false;

$this->dewPointValid = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->dewPointValid->tableName = "isd_measurement";
$this->dewPointValid->externalTableName = "isd_measurement";
$this->dewPointValid->fieldName = "dew_point_valid";
$this->dewPointValid->aliasFieldName = "isd_measurement_dew_point_valid";
$this->dewPointValid->label = "Dew Point Valid";
$this->dewPointValid->allowNullValue = false;

$this->dewPoint = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->dewPoint->tableName = "isd_measurement";
$this->dewPoint->externalTableName = "isd_measurement";
$this->dewPoint->fieldName = "dew_point";
$this->dewPoint->aliasFieldName = "isd_measurement_dew_point";
$this->dewPoint->label = "Dew Point";
$this->dewPoint->allowNullValue = false;

$this->qnhValid = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->qnhValid->tableName = "isd_measurement";
$this->qnhValid->externalTableName = "isd_measurement";
$this->qnhValid->fieldName = "qnh_valid";
$this->qnhValid->aliasFieldName = "isd_measurement_qnh_valid";
$this->qnhValid->label = "QNH Valid";
$this->qnhValid->allowNullValue = false;

$this->qnh = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->qnh->tableName = "isd_measurement";
$this->qnh->externalTableName = "isd_measurement";
$this->qnh->fieldName = "qnh";
$this->qnh->aliasFieldName = "isd_measurement_qnh";
$this->qnh->label = "QNH";
$this->qnh->allowNullValue = false;

$this->windDirection = new \Nemundo\Model\Type\Number\NumberType($this);
$this->windDirection->tableName = "isd_measurement";
$this->windDirection->externalTableName = "isd_measurement";
$this->windDirection->fieldName = "wind_direction";
$this->windDirection->aliasFieldName = "isd_measurement_wind_direction";
$this->windDirection->label = "Wind Direction";
$this->windDirection->allowNullValue = false;

$this->wind = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->wind->tableName = "isd_measurement";
$this->wind->externalTableName = "isd_measurement";
$this->wind->fieldName = "wind";
$this->wind->aliasFieldName = "isd_measurement_wind";
$this->wind->label = "Wind";
$this->wind->allowNullValue = false;

$this->precipitationValid = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->precipitationValid->tableName = "isd_measurement";
$this->precipitationValid->externalTableName = "isd_measurement";
$this->precipitationValid->fieldName = "precipitation_valid";
$this->precipitationValid->aliasFieldName = "isd_measurement_precipitation_valid";
$this->precipitationValid->label = "Precipitation Valid";
$this->precipitationValid->allowNullValue = false;

$this->precipitation = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->precipitation->tableName = "isd_measurement";
$this->precipitation->externalTableName = "isd_measurement";
$this->precipitation->fieldName = "precipitation";
$this->precipitation->aliasFieldName = "isd_measurement_precipitation";
$this->precipitation->label = "Precipitation";
$this->precipitation->allowNullValue = false;

$this->windValid = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->windValid->tableName = "isd_measurement";
$this->windValid->externalTableName = "isd_measurement";
$this->windValid->fieldName = "wind_valid";
$this->windValid->aliasFieldName = "isd_measurement_wind_valid";
$this->windValid->label = "Wind Valid";
$this->windValid->allowNullValue = true;

$this->windDirectionValid = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->windDirectionValid->tableName = "isd_measurement";
$this->windDirectionValid->externalTableName = "isd_measurement";
$this->windDirectionValid->fieldName = "wind_direction_valid";
$this->windDirectionValid->aliasFieldName = "isd_measurement_wind_direction_valid";
$this->windDirectionValid->label = "Wind Direction Valid";
$this->windDirectionValid->allowNullValue = true;

$this->year = new \Nemundo\Model\Type\Number\NumberType($this);
$this->year->tableName = "isd_measurement";
$this->year->externalTableName = "isd_measurement";
$this->year->fieldName = "year";
$this->year->aliasFieldName = "isd_measurement_year";
$this->year->label = "Year";
$this->year->allowNullValue = false;

$this->month = new \Nemundo\Model\Type\Number\NumberType($this);
$this->month->tableName = "isd_measurement";
$this->month->externalTableName = "isd_measurement";
$this->month->fieldName = "month";
$this->month->aliasFieldName = "isd_measurement_month";
$this->month->label = "Month";
$this->month->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "station";
$index->addType($this->stationId);

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "station_date_time";
$index->addType($this->stationId);
$index->addType($this->dateTime);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "station_year_date";
$index->addType($this->stationId);
$index->addType($this->year);
$index->addType($this->date);

}
public function loadStation() {
if ($this->station == null) {
$this->station = new \Nemundo\Meteo\Isd\Data\Station\StationExternalType($this, "isd_measurement_station");
$this->station->tableName = "isd_measurement";
$this->station->fieldName = "station";
$this->station->aliasFieldName = "isd_measurement_station";
$this->station->label = "Station";
}
return $this;
}
}