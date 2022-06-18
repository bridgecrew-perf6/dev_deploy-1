<?php
namespace Nemundo\Meteoschweiz\Data\CmsMesswertStation;
class CmsMesswertStation extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var CmsMesswertStationModel
*/
protected $model;

/**
* @var string
*/
public $stationId;

public function __construct() {
parent::__construct();
$this->model = new CmsMesswertStationModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->stationId, $this->stationId);
$id = parent::save();
return $id;
}
}