<?php
namespace Nemundo\Meteo\Isd\Data\DateContentStation;
class DateContentStationDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var DateContentStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DateContentStationModel();
}
}