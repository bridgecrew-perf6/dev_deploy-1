<?php
namespace Nemundo\Meteo\Isd\Data\DateContentStation;
class DateContentStationCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var DateContentStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DateContentStationModel();
}
}