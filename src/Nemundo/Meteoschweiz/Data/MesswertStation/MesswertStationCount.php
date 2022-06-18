<?php
namespace Nemundo\Meteoschweiz\Data\MesswertStation;
class MesswertStationCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var MesswertStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertStationModel();
}
}