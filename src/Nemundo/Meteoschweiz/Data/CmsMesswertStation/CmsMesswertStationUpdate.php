<?php
namespace Nemundo\Meteoschweiz\Data\CmsMesswertStation;
use Nemundo\Model\Data\AbstractModelUpdate;
class CmsMesswertStationUpdate extends AbstractModelUpdate {
/**
* @var CmsMesswertStationModel
*/
public $model;

/**
* @var string
*/
public $stationId;

public function __construct() {
parent::__construct();
$this->model = new CmsMesswertStationModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->stationId, $this->stationId);
parent::update();
}
}