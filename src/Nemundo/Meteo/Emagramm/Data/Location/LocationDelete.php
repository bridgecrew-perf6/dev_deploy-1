<?php
namespace Nemundo\Meteo\Emagramm\Data\Location;
class LocationDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var LocationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LocationModel();
}
}