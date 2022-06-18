<?php
namespace Nemundo\Meteoschweiz\Data\StationDifference;
class StationDifferenceCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var StationDifferenceModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StationDifferenceModel();
}
}