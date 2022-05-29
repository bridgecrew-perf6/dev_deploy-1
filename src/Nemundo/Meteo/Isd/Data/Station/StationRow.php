<?php
namespace Nemundo\Meteo\Isd\Data\Station;
class StationRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var StationModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $station;

/**
* @var int
*/
public $countryId;

/**
* @var \Nemundo\Meteo\Isd\Data\Country\CountryRow
*/
public $country;

/**
* @var \Nemundo\Core\Type\Geo\GeoCoordinateAltitude
*/
public $coordinate;

/**
* @var string
*/
public $icao;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $validFrom;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $validTo;

/**
* @var bool
*/
public $active;

/**
* @var string
*/
public $stationCode;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->station = $this->getModelValue($model->station);
$this->countryId = intval($this->getModelValue($model->countryId));
if ($model->country !== null) {
$this->loadNemundoMeteoIsdDataCountryCountrycountryRow($model->country);
}
$property = new \Nemundo\Model\Reader\Property\Geo\GeoCoordinateAltitudeReaderProperty($row, $model->coordinate);
$this->coordinate = $property->getValue();
$this->icao = $this->getModelValue($model->icao);
$value = $this->getModelValue($model->validFrom);
if ($value !== "0000-00-00") {
$this->validFrom = new \Nemundo\Core\Type\DateTime\Date($this->getModelValue($model->validFrom));
}
$value = $this->getModelValue($model->validTo);
if ($value !== "0000-00-00") {
$this->validTo = new \Nemundo\Core\Type\DateTime\Date($this->getModelValue($model->validTo));
}
$this->active = boolval($this->getModelValue($model->active));
$this->stationCode = $this->getModelValue($model->stationCode);
}
private function loadNemundoMeteoIsdDataCountryCountrycountryRow($model) {
$this->country = new \Nemundo\Meteo\Isd\Data\Country\CountryRow($this->row, $model);
}
}