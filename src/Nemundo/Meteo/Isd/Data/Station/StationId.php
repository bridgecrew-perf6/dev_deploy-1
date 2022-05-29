<?php
namespace Nemundo\Meteo\Isd\Data\Station;
use Nemundo\Model\Id\AbstractModelIdValue;
class StationId extends AbstractModelIdValue {
/**
* @var StationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StationModel();
}
}