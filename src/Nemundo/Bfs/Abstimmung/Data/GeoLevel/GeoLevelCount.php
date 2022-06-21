<?php
namespace Nemundo\Bfs\Abstimmung\Data\GeoLevel;
class GeoLevelCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var GeoLevelModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeoLevelModel();
}
}