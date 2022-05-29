<?php
namespace Nemundo\Meteo\Isd\Data\MeasurementDay;
class MeasurementDayModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $temperatureMax;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $temperatureMin;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $dewPointMax;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $dewPointMin;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $windMax;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $windDirectionMax;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $qnh;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $precipitation;

protected function loadModel() {
$this->tableName = "isd_measurement_day";
$this->aliasTableName = "isd_measurement_day";
$this->label = "Measurement Day";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "isd_measurement_day";
$this->id->externalTableName = "isd_measurement_day";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "isd_measurement_day_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->stationId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->stationId->tableName = "isd_measurement_day";
$this->stationId->fieldName = "station";
$this->stationId->aliasFieldName = "isd_measurement_day_station";
$this->stationId->label = "Station";
$this->stationId->allowNullValue = true;

$this->date = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->date->tableName = "isd_measurement_day";
$this->date->externalTableName = "isd_measurement_day";
$this->date->fieldName = "date";
$this->date->aliasFieldName = "isd_measurement_day_date";
$this->date->label = "Date";
$this->date->allowNullValue = true;

$this->temperatureMax = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->temperatureMax->tableName = "isd_measurement_day";
$this->temperatureMax->externalTableName = "isd_measurement_day";
$this->temperatureMax->fieldName = "temperature_max";
$this->temperatureMax->aliasFieldName = "isd_measurement_day_temperature_max";
$this->temperatureMax->label = "Temperature Max";
$this->temperatureMax->allowNullValue = true;

$this->temperatureMin = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->temperatureMin->tableName = "isd_measurement_day";
$this->temperatureMin->externalTableName = "isd_measurement_day";
$this->temperatureMin->fieldName = "temperature_min";
$this->temperatureMin->aliasFieldName = "isd_measurement_day_temperature_min";
$this->temperatureMin->label = "Temperature Min";
$this->temperatureMin->allowNullValue = true;

$this->dewPointMax = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->dewPointMax->tableName = "isd_measurement_day";
$this->dewPointMax->externalTableName = "isd_measurement_day";
$this->dewPointMax->fieldName = "dew_point_max";
$this->dewPointMax->aliasFieldName = "isd_measurement_day_dew_point_max";
$this->dewPointMax->label = "Dew Point Max";
$this->dewPointMax->allowNullValue = true;

$this->dewPointMin = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->dewPointMin->tableName = "isd_measurement_day";
$this->dewPointMin->externalTableName = "isd_measurement_day";
$this->dewPointMin->fieldName = "dew_point_min";
$this->dewPointMin->aliasFieldName = "isd_measurement_day_dew_point_min";
$this->dewPointMin->label = "Dew Point Min";
$this->dewPointMin->allowNullValue = true;

$this->windMax = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->windMax->tableName = "isd_measurement_day";
$this->windMax->externalTableName = "isd_measurement_day";
$this->windMax->fieldName = "wind_max";
$this->windMax->aliasFieldName = "isd_measurement_day_wind_max";
$this->windMax->label = "Wind Max";
$this->windMax->allowNullValue = true;

$this->windDirectionMax = new \Nemundo\Model\Type\Number\NumberType($this);
$this->windDirectionMax->tableName = "isd_measurement_day";
$this->windDirectionMax->externalTableName = "isd_measurement_day";
$this->windDirectionMax->fieldName = "wind_direction_max";
$this->windDirectionMax->aliasFieldName = "isd_measurement_day_wind_direction_max";
$this->windDirectionMax->label = "Wind Direction Max";
$this->windDirectionMax->allowNullValue = true;

$this->qnh = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->qnh->tableName = "isd_measurement_day";
$this->qnh->externalTableName = "isd_measurement_day";
$this->qnh->fieldName = "qnh";
$this->qnh->aliasFieldName = "isd_measurement_day_qnh";
$this->qnh->label = "Qnh";
$this->qnh->allowNullValue = true;

$this->precipitation = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->precipitation->tableName = "isd_measurement_day";
$this->precipitation->externalTableName = "isd_measurement_day";
$this->precipitation->fieldName = "precipitation";
$this->precipitation->aliasFieldName = "isd_measurement_day_precipitation";
$this->precipitation->label = "Precipitation";
$this->precipitation->allowNullValue = true;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "station_date";
$index->addType($this->stationId);
$index->addType($this->date);

}
public function loadStation() {
if ($this->station == null) {
$this->station = new \Nemundo\Meteo\Isd\Data\Station\StationExternalType($this, "isd_measurement_day_station");
$this->station->tableName = "isd_measurement_day";
$this->station->fieldName = "station";
$this->station->aliasFieldName = "isd_measurement_day_station";
$this->station->label = "Station";
}
return $this;
}
}