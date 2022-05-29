<?php
namespace Nemundo\Meteo\Isd\Data\DateContentStation;
class DateContentStationBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var DateContentStationModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->dateContentId, $this->dateContentId);
$this->typeValueList->setModelValue($this->model->stationId, $this->stationId);
$id = parent::save();
return $id;
}
}