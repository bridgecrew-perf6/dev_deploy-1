<?php
namespace Nemundo\Meteo\Isd\Data\DateContentStation;
use Nemundo\Model\Data\AbstractModelUpdate;
class DateContentStationUpdate extends AbstractModelUpdate {
/**
* @var DateContentStationModel
*/
public $model;

/**
* @var string
*/
public $dateContentId;

/**
* @var string
*/
public $stationId;

public function __construct() {
parent::__construct();
$this->model = new DateContentStationModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->dateContentId, $this->dateContentId);
$this->typeValueList->setModelValue($this->model->stationId, $this->stationId);
parent::update();
}
}