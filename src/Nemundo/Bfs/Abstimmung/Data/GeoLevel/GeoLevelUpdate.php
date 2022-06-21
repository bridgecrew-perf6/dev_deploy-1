<?php
namespace Nemundo\Bfs\Abstimmung\Data\GeoLevel;
use Nemundo\Model\Data\AbstractModelUpdate;
class GeoLevelUpdate extends AbstractModelUpdate {
/**
* @var GeoLevelModel
*/
public $model;

/**
* @var string
*/
public $geoLevel;

public function __construct() {
parent::__construct();
$this->model = new GeoLevelModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->geoLevel, $this->geoLevel);
parent::update();
}
}