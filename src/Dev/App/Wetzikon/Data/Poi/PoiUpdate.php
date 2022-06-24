<?php
namespace Dev\App\Wetzikon\Data\Poi;
use Nemundo\Model\Data\AbstractModelUpdate;
class PoiUpdate extends AbstractModelUpdate {
/**
* @var PoiModel
*/
public $model;

/**
* @var string
*/
public $titel;

/**
* @var string
*/
public $text;

/**
* @var \Nemundo\Core\Type\Geo\GeoCoordinate
*/
public $coordinate;

public function __construct() {
parent::__construct();
$this->model = new PoiModel();
$this->coordinate = new \Nemundo\Core\Type\Geo\GeoCoordinate();
}
public function update() {
$this->typeValueList->setModelValue($this->model->titel, $this->titel);
$this->typeValueList->setModelValue($this->model->text, $this->text);
$property = new \Nemundo\Model\Data\Property\Geo\GeoCoordinateDataProperty($this->model->coordinate, $this->typeValueList);
$property->setValue($this->coordinate);
parent::update();
}
}