<?php
namespace Nemundo\Content\App\Location\Data\Tracking;
use Nemundo\Model\Data\AbstractModelUpdate;
class TrackingUpdate extends AbstractModelUpdate {
/**
* @var TrackingModel
*/
public $model;

/**
* @var \Nemundo\Core\Type\DateTime\DateTime
*/
public $dateTime;

/**
* @var \Nemundo\Core\Type\Geo\GeoCoordinate
*/
public $geoCoordinate;

public function __construct() {
parent::__construct();
$this->model = new TrackingModel();
$this->dateTime = new \Nemundo\Core\Type\DateTime\DateTime();
$this->geoCoordinate = new \Nemundo\Core\Type\Geo\GeoCoordinate();
}
public function update() {
$property = new \Nemundo\Model\Data\Property\DateTime\DateTimeDataProperty($this->model->dateTime, $this->typeValueList);
$property->setValue($this->dateTime);
$property = new \Nemundo\Model\Data\Property\Geo\GeoCoordinateDataProperty($this->model->geoCoordinate, $this->typeValueList);
$property->setValue($this->geoCoordinate);
parent::update();
}
}