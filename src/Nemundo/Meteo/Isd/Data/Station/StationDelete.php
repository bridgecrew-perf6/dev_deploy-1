<?php
namespace Nemundo\Meteo\Isd\Data\Station;
class StationDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var StationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StationModel();
}
}