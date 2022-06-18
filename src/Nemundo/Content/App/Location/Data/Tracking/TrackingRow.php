<?php
namespace Nemundo\Content\App\Location\Data\Tracking;
class TrackingRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var TrackingModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var \Nemundo\Core\Type\DateTime\DateTime
*/
public $dateTime;

/**
* @var \Nemundo\Core\Type\Geo\GeoCoordinate
*/
public $geoCoordinate;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->dateTime = new \Nemundo\Core\Type\DateTime\DateTime($this->getModelValue($model->dateTime));
$property = new \Nemundo\Model\Reader\Property\Geo\GeoCoordinateReaderProperty($row, $model->geoCoordinate);
$this->geoCoordinate = $property->getValue();
}
}