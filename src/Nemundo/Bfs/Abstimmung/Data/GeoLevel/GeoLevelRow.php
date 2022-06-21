<?php
namespace Nemundo\Bfs\Abstimmung\Data\GeoLevel;
class GeoLevelRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var GeoLevelModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $geoLevel;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->geoLevel = $this->getModelValue($model->geoLevel);
}
}