<?php
namespace Nemundo\Content\App\Location\Data\Tracking;
class TrackingValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var TrackingModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TrackingModel();
}
}