<?php
namespace Nemundo\Bfs\Abstimmung\Data\GeoLevel;
class GeoLevelBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var GeoLevelModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $geoLevel;

public function __construct() {
parent::__construct();
$this->model = new GeoLevelModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->geoLevel, $this->geoLevel);
$id = parent::save();
return $id;
}
}