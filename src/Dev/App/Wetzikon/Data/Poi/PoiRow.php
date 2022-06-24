<?php
namespace Dev\App\Wetzikon\Data\Poi;
class PoiRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var PoiModel
*/
public $model;

/**
* @var string
*/
public $id;

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

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->titel = $this->getModelValue($model->titel);
$this->text = $this->getModelValue($model->text);
$property = new \Nemundo\Model\Reader\Property\Geo\GeoCoordinateReaderProperty($row, $model->coordinate);
$this->coordinate = $property->getValue();
}
}