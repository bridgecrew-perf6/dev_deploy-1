<?php
namespace Nemundo\Meteoschweiz\Data\Messwert;
class MesswertModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $stationId;

/**
* @var \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationExternalType
*/
public $station;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $temperature;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $dateTimeId;

/**
* @var \Nemundo\Meteoschweiz\Data\MesswertDateTime\MesswertDateTimeExternalType
*/
public $dateTime;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $qnh;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $qfe;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $qff;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $wind;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $windGust;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $windDirection;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $humidity;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $dewPoint;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $hasQnh;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $hasTemperature;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $hasWind;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $precipitation;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $sunshine;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $globalRadiation;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $hasSunshine;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $hasPrecipitation;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $hasQff;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $hasHumidity;

protected function loadModel() {
$this->tableName = "meteoschweiz_messwert";
$this->aliasTableName = "meteoschweiz_messwert";
$this->label = "Messwert";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "meteoschweiz_messwert";
$this->id->externalTableName = "meteoschweiz_messwert";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "meteoschweiz_messwert_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->stationId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->stationId->tableName = "meteoschweiz_messwert";
$this->stationId->fieldName = "station";
$this->stationId->aliasFieldName = "meteoschweiz_messwert_station";
$this->stationId->label = "Station";
$this->stationId->allowNullValue = false;

$this->temperature = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->temperature->tableName = "meteoschweiz_messwert";
$this->temperature->externalTableName = "meteoschweiz_messwert";
$this->temperature->fieldName = "temperature";
$this->temperature->aliasFieldName = "meteoschweiz_messwert_temperature";
$this->temperature->label = "Temperature";
$this->temperature->allowNullValue = false;

$this->dateTimeId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->dateTimeId->tableName = "meteoschweiz_messwert";
$this->dateTimeId->fieldName = "date_time";
$this->dateTimeId->aliasFieldName = "meteoschweiz_messwert_date_time";
$this->dateTimeId->label = "Date Time";
$this->dateTimeId->allowNullValue = false;

$this->qnh = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->qnh->tableName = "meteoschweiz_messwert";
$this->qnh->externalTableName = "meteoschweiz_messwert";
$this->qnh->fieldName = "qnh";
$this->qnh->aliasFieldName = "meteoschweiz_messwert_qnh";
$this->qnh->label = "QNH";
$this->qnh->allowNullValue = false;

$this->qfe = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->qfe->tableName = "meteoschweiz_messwert";
$this->qfe->externalTableName = "meteoschweiz_messwert";
$this->qfe->fieldName = "qfe";
$this->qfe->aliasFieldName = "meteoschweiz_messwert_qfe";
$this->qfe->label = "QFE";
$this->qfe->allowNullValue = false;

$this->qff = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->qff->tableName = "meteoschweiz_messwert";
$this->qff->externalTableName = "meteoschweiz_messwert";
$this->qff->fieldName = "qff";
$this->qff->aliasFieldName = "meteoschweiz_messwert_qff";
$this->qff->label = "QFF";
$this->qff->allowNullValue = false;

$this->wind = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->wind->tableName = "meteoschweiz_messwert";
$this->wind->externalTableName = "meteoschweiz_messwert";
$this->wind->fieldName = "wind";
$this->wind->aliasFieldName = "meteoschweiz_messwert_wind";
$this->wind->label = "Wind";
$this->wind->allowNullValue = false;

$this->windGust = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->windGust->tableName = "meteoschweiz_messwert";
$this->windGust->externalTableName = "meteoschweiz_messwert";
$this->windGust->fieldName = "wind_gust";
$this->windGust->aliasFieldName = "meteoschweiz_messwert_wind_gust";
$this->windGust->label = "Wind Gust";
$this->windGust->allowNullValue = false;

$this->windDirection = new \Nemundo\Model\Type\Number\NumberType($this);
$this->windDirection->tableName = "meteoschweiz_messwert";
$this->windDirection->externalTableName = "meteoschweiz_messwert";
$this->windDirection->fieldName = "wind_direction";
$this->windDirection->aliasFieldName = "meteoschweiz_messwert_wind_direction";
$this->windDirection->label = "Wind Direction";
$this->windDirection->allowNullValue = false;

$this->humidity = new \Nemundo\Model\Type\Number\NumberType($this);
$this->humidity->tableName = "meteoschweiz_messwert";
$this->humidity->externalTableName = "meteoschweiz_messwert";
$this->humidity->fieldName = "humidity";
$this->humidity->aliasFieldName = "meteoschweiz_messwert_humidity";
$this->humidity->label = "Humidity";
$this->humidity->allowNullValue = false;

$this->dewPoint = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->dewPoint->tableName = "meteoschweiz_messwert";
$this->dewPoint->externalTableName = "meteoschweiz_messwert";
$this->dewPoint->fieldName = "dew_point";
$this->dewPoint->aliasFieldName = "meteoschweiz_messwert_dew_point";
$this->dewPoint->label = "Dew Point";
$this->dewPoint->allowNullValue = false;

$this->hasQnh = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->hasQnh->tableName = "meteoschweiz_messwert";
$this->hasQnh->externalTableName = "meteoschweiz_messwert";
$this->hasQnh->fieldName = "has_qnh";
$this->hasQnh->aliasFieldName = "meteoschweiz_messwert_has_qnh";
$this->hasQnh->label = "Has QNH";
$this->hasQnh->allowNullValue = false;

$this->hasTemperature = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->hasTemperature->tableName = "meteoschweiz_messwert";
$this->hasTemperature->externalTableName = "meteoschweiz_messwert";
$this->hasTemperature->fieldName = "has_temperature";
$this->hasTemperature->aliasFieldName = "meteoschweiz_messwert_has_temperature";
$this->hasTemperature->label = "Has Temperature";
$this->hasTemperature->allowNullValue = false;

$this->hasWind = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->hasWind->tableName = "meteoschweiz_messwert";
$this->hasWind->externalTableName = "meteoschweiz_messwert";
$this->hasWind->fieldName = "has_wind";
$this->hasWind->aliasFieldName = "meteoschweiz_messwert_has_wind";
$this->hasWind->label = "Has Wind";
$this->hasWind->allowNullValue = false;

$this->precipitation = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->precipitation->tableName = "meteoschweiz_messwert";
$this->precipitation->externalTableName = "meteoschweiz_messwert";
$this->precipitation->fieldName = "precipitation";
$this->precipitation->aliasFieldName = "meteoschweiz_messwert_precipitation";
$this->precipitation->label = "Precipitation";
$this->precipitation->allowNullValue = false;

$this->sunshine = new \Nemundo\Model\Type\Number\NumberType($this);
$this->sunshine->tableName = "meteoschweiz_messwert";
$this->sunshine->externalTableName = "meteoschweiz_messwert";
$this->sunshine->fieldName = "sunshine";
$this->sunshine->aliasFieldName = "meteoschweiz_messwert_sunshine";
$this->sunshine->label = "Sunshine";
$this->sunshine->allowNullValue = false;

$this->globalRadiation = new \Nemundo\Model\Type\Number\NumberType($this);
$this->globalRadiation->tableName = "meteoschweiz_messwert";
$this->globalRadiation->externalTableName = "meteoschweiz_messwert";
$this->globalRadiation->fieldName = "global_radiation";
$this->globalRadiation->aliasFieldName = "meteoschweiz_messwert_global_radiation";
$this->globalRadiation->label = "Global Radiation";
$this->globalRadiation->allowNullValue = false;

$this->hasSunshine = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->hasSunshine->tableName = "meteoschweiz_messwert";
$this->hasSunshine->externalTableName = "meteoschweiz_messwert";
$this->hasSunshine->fieldName = "has_sunshine";
$this->hasSunshine->aliasFieldName = "meteoschweiz_messwert_has_sunshine";
$this->hasSunshine->label = "Has Sunshine";
$this->hasSunshine->allowNullValue = false;

$this->hasPrecipitation = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->hasPrecipitation->tableName = "meteoschweiz_messwert";
$this->hasPrecipitation->externalTableName = "meteoschweiz_messwert";
$this->hasPrecipitation->fieldName = "has_precipitation";
$this->hasPrecipitation->aliasFieldName = "meteoschweiz_messwert_has_precipitation";
$this->hasPrecipitation->label = "Has Precipitation";
$this->hasPrecipitation->allowNullValue = false;

$this->hasQff = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->hasQff->tableName = "meteoschweiz_messwert";
$this->hasQff->externalTableName = "meteoschweiz_messwert";
$this->hasQff->fieldName = "has_qff";
$this->hasQff->aliasFieldName = "meteoschweiz_messwert_has_qff";
$this->hasQff->label = "Has QFF";
$this->hasQff->allowNullValue = false;

$this->hasHumidity = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->hasHumidity->tableName = "meteoschweiz_messwert";
$this->hasHumidity->externalTableName = "meteoschweiz_messwert";
$this->hasHumidity->fieldName = "has_humidity";
$this->hasHumidity->aliasFieldName = "meteoschweiz_messwert_has_humidity";
$this->hasHumidity->label = "Has Humidity";
$this->hasHumidity->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "station_date_time";
$index->addType($this->stationId);
$index->addType($this->dateTimeId);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "date_time";
$index->addType($this->dateTimeId);

}
public function loadStation() {
if ($this->station == null) {
$this->station = new \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationExternalType($this, "meteoschweiz_messwert_station");
$this->station->tableName = "meteoschweiz_messwert";
$this->station->fieldName = "station";
$this->station->aliasFieldName = "meteoschweiz_messwert_station";
$this->station->label = "Station";
}
return $this;
}
public function loadDateTime() {
if ($this->dateTime == null) {
$this->dateTime = new \Nemundo\Meteoschweiz\Data\MesswertDateTime\MesswertDateTimeExternalType($this, "meteoschweiz_messwert_date_time");
$this->dateTime->tableName = "meteoschweiz_messwert";
$this->dateTime->fieldName = "date_time";
$this->dateTime->aliasFieldName = "meteoschweiz_messwert_date_time";
$this->dateTime->label = "Date Time";
}
return $this;
}
}