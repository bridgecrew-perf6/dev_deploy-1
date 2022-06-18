<?php
namespace Nemundo\Meteoschweiz\Data\StationDifference;
use Nemundo\Model\Id\AbstractModelIdValue;
class StationDifferenceId extends AbstractModelIdValue {
/**
* @var StationDifferenceModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StationDifferenceModel();
}
}