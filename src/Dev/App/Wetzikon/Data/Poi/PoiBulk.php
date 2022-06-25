<?php
namespace Dev\App\Wetzikon\Data\Poi;
class PoiBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var PoiModel
*/
protected $model;

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

/**
* @var string
*/
public $strasse;

/**
* @var string
*/
public $coordinateText;

public function __construct() {
parent::__construct();
$this->model = new PoiModel();
$this->coordinate = new \Nemundo\Core\Type\Geo\GeoCoordinate();
}
public function save() {
$this->typeValueList->setModelValue($this->model->titel, $this->titel);
$this->typeValueList->setModelValue($this->model->text, $this->text);
$property = new \Nemundo\Model\Data\Property\Geo\GeoCoordinateDataProperty($this->model->coordinate, $this->typeValueList);
$property->setValue($this->coordinate);
$this->typeValueList->setModelValue($this->model->strasse, $this->strasse);
$this->typeValueList->setModelValue($this->model->coordinateText, $this->coordinateText);
$id = parent::save();
return $id;
}
}