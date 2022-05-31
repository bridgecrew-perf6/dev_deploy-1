<?php
namespace Nemundo\Bfs\Abstimmung\Data\GeoLevel;
class GeoLevelValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var GeoLevelModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeoLevelModel();
}
}