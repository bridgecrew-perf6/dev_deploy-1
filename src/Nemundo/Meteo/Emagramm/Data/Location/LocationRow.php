<?php
namespace Nemundo\Meteo\Emagramm\Data\Location;
class LocationRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var LocationModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $location;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->location = $this->getModelValue($model->location);
}
}