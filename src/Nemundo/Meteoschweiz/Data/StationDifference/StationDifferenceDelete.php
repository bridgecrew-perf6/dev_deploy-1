<?php
namespace Nemundo\Meteoschweiz\Data\StationDifference;
class StationDifferenceDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var StationDifferenceModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StationDifferenceModel();
}
}