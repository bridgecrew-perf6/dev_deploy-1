<?php
namespace Nemundo\Meteoschweiz\Data\CmsMesswertStation;
class CmsMesswertStationValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var CmsMesswertStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CmsMesswertStationModel();
}
}