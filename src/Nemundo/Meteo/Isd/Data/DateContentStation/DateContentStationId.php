<?php
namespace Nemundo\Meteo\Isd\Data\DateContentStation;
use Nemundo\Model\Id\AbstractModelIdValue;
class DateContentStationId extends AbstractModelIdValue {
/**
* @var DateContentStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DateContentStationModel();
}
}