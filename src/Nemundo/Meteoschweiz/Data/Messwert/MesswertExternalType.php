<?php
namespace Nemundo\Meteoschweiz\Data\Messwert;
class MesswertExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
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
* @var \Nemundo\Model\Type\Id\IdType
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

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = MesswertModel::class;
$this->externalTableName = "meteoschweiz_messwert";
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

$this->temperature = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->temperature->fieldName = "temperature";
$this->temperature->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->temperature->externalTableName = $this->externalTableName;
$this->temperature->aliasFieldName = $this->temperature->tableName . "_" . $this->temperature->fieldName;
$this->temperature->label = "Temperature";
$this->addType($this->temperature);

$this->dateTimeId = new \Nemundo\Model\Type\Id\IdType();
$this->dateTimeId->fieldName = "date_time";
$this->dateTimeId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->dateTimeId->aliasFieldName = $this->dateTimeId->tableName ."_".$this->dateTimeId->fieldName;
$this->dateTimeId->label = "Date Time";
$this->addType($this->dateTimeId);

$this->qnh = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->qnh->fieldName = "qnh";
$this->qnh->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->qnh->externalTableName = $this->externalTableName;
$this->qnh->aliasFieldName = $this->qnh->tableName . "_" . $this->qnh->fieldName;
$this->qnh->label = "QNH";
$this->addType($this->qnh);

$this->qfe = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->qfe->fieldName = "qfe";
$this->qfe->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->qfe->externalTableName = $this->externalTableName;
$this->qfe->aliasFieldName = $this->qfe->tableName . "_" . $this->qfe->fieldName;
$this->qfe->label = "QFE";
$this->addType($this->qfe);

$this->qff = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->qff->fieldName = "qff";
$this->qff->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->qff->externalTableName = $this->externalTableName;
$this->qff->aliasFieldName = $this->qff->tableName . "_" . $this->qff->fieldName;
$this->qff->label = "QFF";
$this->addType($this->qff);

$this->wind = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->wind->fieldName = "wind";
$this->wind->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->wind->externalTableName = $this->externalTableName;
$this->wind->aliasFieldName = $this->wind->tableName . "_" . $this->wind->fieldName;
$this->wind->label = "Wind";
$this->addType($this->wind);

$this->windGust = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->windGust->fieldName = "wind_gust";
$this->windGust->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->windGust->externalTableName = $this->externalTableName;
$this->windGust->aliasFieldName = $this->windGust->tableName . "_" . $this->windGust->fieldName;
$this->windGust->label = "Wind Gust";
$this->addType($this->windGust);

$this->windDirection = new \Nemundo\Model\Type\Number\NumberType();
$this->windDirection->fieldName = "wind_direction";
$this->windDirection->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->windDirection->externalTableName = $this->externalTableName;
$this->windDirection->aliasFieldName = $this->windDirection->tableName . "_" . $this->windDirection->fieldName;
$this->windDirection->label = "Wind Direction";
$this->addType($this->windDirection);

$this->humidity = new \Nemundo\Model\Type\Number\NumberType();
$this->humidity->fieldName = "humidity";
$this->humidity->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->humidity->externalTableName = $this->externalTableName;
$this->humidity->aliasFieldName = $this->humidity->tableName . "_" . $this->humidity->fieldName;
$this->humidity->label = "Humidity";
$this->addType($this->humidity);

$this->dewPoint = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->dewPoint->fieldName = "dew_point";
$this->dewPoint->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->dewPoint->externalTableName = $this->externalTableName;
$this->dewPoint->aliasFieldName = $this->dewPoint->tableName . "_" . $this->dewPoint->fieldName;
$this->dewPoint->label = "Dew Point";
$this->addType($this->dewPoint);

$this->hasQnh = new \Nemundo\Model\Type\Number\YesNoType();
$this->hasQnh->fieldName = "has_qnh";
$this->hasQnh->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->hasQnh->externalTableName = $this->externalTableName;
$this->hasQnh->aliasFieldName = $this->hasQnh->tableName . "_" . $this->hasQnh->fieldName;
$this->hasQnh->label = "Has QNH";
$this->addType($this->hasQnh);

$this->hasTemperature = new \Nemundo\Model\Type\Number\YesNoType();
$this->hasTemperature->fieldName = "has_temperature";
$this->hasTemperature->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->hasTemperature->externalTableName = $this->externalTableName;
$this->hasTemperature->aliasFieldName = $this->hasTemperature->tableName . "_" . $this->hasTemperature->fieldName;
$this->hasTemperature->label = "Has Temperature";
$this->addType($this->hasTemperature);

$this->hasWind = new \Nemundo\Model\Type\Number\YesNoType();
$this->hasWind->fieldName = "has_wind";
$this->hasWind->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->hasWind->externalTableName = $this->externalTableName;
$this->hasWind->aliasFieldName = $this->hasWind->tableName . "_" . $this->hasWind->fieldName;
$this->hasWind->label = "Has Wind";
$this->addType($this->hasWind);

$this->precipitation = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->precipitation->fieldName = "precipitation";
$this->precipitation->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->precipitation->externalTableName = $this->externalTableName;
$this->precipitation->aliasFieldName = $this->precipitation->tableName . "_" . $this->precipitation->fieldName;
$this->precipitation->label = "Precipitation";
$this->addType($this->precipitation);

$this->sunshine = new \Nemundo\Model\Type\Number\NumberType();
$this->sunshine->fieldName = "sunshine";
$this->sunshine->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->sunshine->externalTableName = $this->externalTableName;
$this->sunshine->aliasFieldName = $this->sunshine->tableName . "_" . $this->sunshine->fieldName;
$this->sunshine->label = "Sunshine";
$this->addType($this->sunshine);

$this->globalRadiation = new \Nemundo\Model\Type\Number\NumberType();
$this->globalRadiation->fieldName = "global_radiation";
$this->globalRadiation->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->globalRadiation->externalTableName = $this->externalTableName;
$this->globalRadiation->aliasFieldName = $this->globalRadiation->tableName . "_" . $this->globalRadiation->fieldName;
$this->globalRadiation->label = "Global Radiation";
$this->addType($this->globalRadiation);

$this->hasSunshine = new \Nemundo\Model\Type\Number\YesNoType();
$this->hasSunshine->fieldName = "has_sunshine";
$this->hasSunshine->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->hasSunshine->externalTableName = $this->externalTableName;
$this->hasSunshine->aliasFieldName = $this->hasSunshine->tableName . "_" . $this->hasSunshine->fieldName;
$this->hasSunshine->label = "Has Sunshine";
$this->addType($this->hasSunshine);

$this->hasPrecipitation = new \Nemundo\Model\Type\Number\YesNoType();
$this->hasPrecipitation->fieldName = "has_precipitation";
$this->hasPrecipitation->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->hasPrecipitation->externalTableName = $this->externalTableName;
$this->hasPrecipitation->aliasFieldName = $this->hasPrecipitation->tableName . "_" . $this->hasPrecipitation->fieldName;
$this->hasPrecipitation->label = "Has Precipitation";
$this->addType($this->hasPrecipitation);

$this->hasQff = new \Nemundo\Model\Type\Number\YesNoType();
$this->hasQff->fieldName = "has_qff";
$this->hasQff->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->hasQff->externalTableName = $this->externalTableName;
$this->hasQff->aliasFieldName = $this->hasQff->tableName . "_" . $this->hasQff->fieldName;
$this->hasQff->label = "Has QFF";
$this->addType($this->hasQff);

$this->hasHumidity = new \Nemundo\Model\Type\Number\YesNoType();
$this->hasHumidity->fieldName = "has_humidity";
$this->hasHumidity->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->hasHumidity->externalTableName = $this->externalTableName;
$this->hasHumidity->aliasFieldName = $this->hasHumidity->tableName . "_" . $this->hasHumidity->fieldName;
$this->hasHumidity->label = "Has Humidity";
$this->addType($this->hasHumidity);

}
public function loadStation() {
if ($this->station == null) {
$this->station = new \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationExternalType(null, $this->parentFieldName . "_station");
$this->station->fieldName = "station";
$this->station->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->station->aliasFieldName = $this->station->tableName ."_".$this->station->fieldName;
$this->station->label = "Station";
$this->addType($this->station);
}
return $this;
}
public function loadDateTime() {
if ($this->dateTime == null) {
$this->dateTime = new \Nemundo\Meteoschweiz\Data\MesswertDateTime\MesswertDateTimeExternalType(null, $this->parentFieldName . "_date_time");
$this->dateTime->fieldName = "date_time";
$this->dateTime->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->dateTime->aliasFieldName = $this->dateTime->tableName ."_".$this->dateTime->fieldName;
$this->dateTime->label = "Date Time";
$this->addType($this->dateTime);
}
return $this;
}
}