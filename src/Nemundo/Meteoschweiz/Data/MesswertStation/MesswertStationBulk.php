<?php
namespace Nemundo\Meteoschweiz\Data\MesswertStation;
class MesswertStationBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var MesswertStationModel
*/
protected $model;

/**
* @var string
*/
public $stationCode;

/**
* @var string
*/
public $station;

/**
* @var \Nemundo\Core\Type\Geo\GeoCoordinateAltitude
*/
public $geoCoordinate;

public function __construct() {
parent::__construct();
$this->model = new MesswertStationModel();
$this->geoCoordinate = new \Nemundo\Core\Type\Geo\GeoCoordinateAltitude();
}
public function save() {
$this->typeValueList->setModelValue($this->model->stationCode, $this->stationCode);
$this->typeValueList->setModelValue($this->model->station, $this->station);
$property = new \Nemundo\Model\Data\Property\Geo\GeoCoordinateAltitudeDataProperty($this->model->geoCoordinate, $this->typeValueList);
$property->setValue($this->geoCoordinate);
$id = parent::save();
return $id;
}
}