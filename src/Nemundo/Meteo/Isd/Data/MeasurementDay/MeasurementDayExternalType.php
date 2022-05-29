<?php
namespace Nemundo\Meteo\Isd\Data\MeasurementDay;
class MeasurementDayExternalType extends \Nemundo\Model\Type\External\ExternalType {
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

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = MeasurementDayModel::class;
$this->externalTableName = "isd_measurement_day";
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

$this->temperatureMax = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->temperatureMax->fieldName = "temperature_max";
$this->temperatureMax->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->temperatureMax->externalTableName = $this->externalTableName;
$this->temperatureMax->aliasFieldName = $this->temperatureMax->tableName . "_" . $this->temperatureMax->fieldName;
$this->temperatureMax->label = "Temperature Max";
$this->addType($this->temperatureMax);

$this->temperatureMin = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->temperatureMin->fieldName = "temperature_min";
$this->temperatureMin->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->temperatureMin->externalTableName = $this->externalTableName;
$this->temperatureMin->aliasFieldName = $this->temperatureMin->tableName . "_" . $this->temperatureMin->fieldName;
$this->temperatureMin->label = "Temperature Min";
$this->addType($this->temperatureMin);

$this->dewPointMax = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->dewPointMax->fieldName = "dew_point_max";
$this->dewPointMax->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->dewPointMax->externalTableName = $this->externalTableName;
$this->dewPointMax->aliasFieldName = $this->dewPointMax->tableName . "_" . $this->dewPointMax->fieldName;
$this->dewPointMax->label = "Dew Point Max";
$this->addType($this->dewPointMax);

$this->dewPointMin = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->dewPointMin->fieldName = "dew_point_min";
$this->dewPointMin->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->dewPointMin->externalTableName = $this->externalTableName;
$this->dewPointMin->aliasFieldName = $this->dewPointMin->tableName . "_" . $this->dewPointMin->fieldName;
$this->dewPointMin->label = "Dew Point Min";
$this->addType($this->dewPointMin);

$this->windMax = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->windMax->fieldName = "wind_max";
$this->windMax->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->windMax->externalTableName = $this->externalTableName;
$this->windMax->aliasFieldName = $this->windMax->tableName . "_" . $this->windMax->fieldName;
$this->windMax->label = "Wind Max";
$this->addType($this->windMax);

$this->windDirectionMax = new \Nemundo\Model\Type\Number\NumberType();
$this->windDirectionMax->fieldName = "wind_direction_max";
$this->windDirectionMax->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->windDirectionMax->externalTableName = $this->externalTableName;
$this->windDirectionMax->aliasFieldName = $this->windDirectionMax->tableName . "_" . $this->windDirectionMax->fieldName;
$this->windDirectionMax->label = "Wind Direction Max";
$this->addType($this->windDirectionMax);

$this->qnh = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->qnh->fieldName = "qnh";
$this->qnh->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->qnh->externalTableName = $this->externalTableName;
$this->qnh->aliasFieldName = $this->qnh->tableName . "_" . $this->qnh->fieldName;
$this->qnh->label = "Qnh";
$this->addType($this->qnh);

$this->precipitation = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->precipitation->fieldName = "precipitation";
$this->precipitation->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->precipitation->externalTableName = $this->externalTableName;
$this->precipitation->aliasFieldName = $this->precipitation->tableName . "_" . $this->precipitation->fieldName;
$this->precipitation->label = "Precipitation";
$this->addType($this->precipitation);

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