<?php
namespace Nemundo\Meteo\Emagramm\Data\Emagramm;
class EmagrammRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var EmagrammModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var \Nemundo\Model\Reader\Property\File\ImageReaderProperty
*/
public $image;

/**
* @var \Nemundo\Core\Type\DateTime\DateTime
*/
public $dateTime;

/**
* @var int
*/
public $locationId;

/**
* @var \Nemundo\Meteo\Emagramm\Data\Location\LocationRow
*/
public $location;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->image = new \Nemundo\Model\Reader\Property\File\ImageReaderProperty($row, $model->image);
$this->dateTime = new \Nemundo\Core\Type\DateTime\DateTime($this->getModelValue($model->dateTime));
$this->locationId = intval($this->getModelValue($model->locationId));
if ($model->location !== null) {
$this->loadNemundoMeteoEmagrammDataLocationLocationlocationRow($model->location);
}
}
private function loadNemundoMeteoEmagrammDataLocationLocationlocationRow($model) {
$this->location = new \Nemundo\Meteo\Emagramm\Data\Location\LocationRow($this->row, $model);
}
}