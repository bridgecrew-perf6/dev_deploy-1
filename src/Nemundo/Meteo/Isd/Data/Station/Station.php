<?php
namespace Nemundo\Meteo\Isd\Data\Station;
class Station extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var StationModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $station;

/**
* @var string
*/
public $countryId;

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

public function __construct() {
parent::__construct();
$this->model = new StationModel();
$this->coordinate = new \Nemundo\Core\Type\Geo\GeoCoordinateAltitude();
$this->validFrom = new \Nemundo\Core\Type\DateTime\Date();
$this->validTo = new \Nemundo\Core\Type\DateTime\Date();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->station, $this->station);
$this->typeValueList->setModelValue($this->model->countryId, $this->countryId);
$property = new \Nemundo\Model\Data\Property\Geo\GeoCoordinateAltitudeDataProperty($this->model->coordinate, $this->typeValueList);
$property->setValue($this->coordinate);
$this->typeValueList->setModelValue($this->model->icao, $this->icao);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->validFrom, $this->typeValueList);
$property->setValue($this->validFrom);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->validTo, $this->typeValueList);
$property->setValue($this->validTo);
$this->typeValueList->setModelValue($this->model->active, $this->active);
$this->typeValueList->setModelValue($this->model->stationCode, $this->stationCode);
$id = parent::save();
return $id;
}
}