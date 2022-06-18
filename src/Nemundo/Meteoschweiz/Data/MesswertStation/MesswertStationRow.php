<?php
namespace Nemundo\Meteoschweiz\Data\MesswertStation;
class MesswertStationRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var MesswertStationModel
*/
public $model;

/**
* @var string
*/
public $id;

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

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->stationCode = $this->getModelValue($model->stationCode);
$this->station = $this->getModelValue($model->station);
$property = new \Nemundo\Model\Reader\Property\Geo\GeoCoordinateAltitudeReaderProperty($row, $model->geoCoordinate);
$this->geoCoordinate = $property->getValue();
}
}