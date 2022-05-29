<?php
namespace Nemundo\Meteo\Isd\Data\Station;
class StationCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var StationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StationModel();
}
}