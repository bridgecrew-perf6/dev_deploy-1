<?php
namespace Nemundo\Content\App\Location\Data\Tracking;
class TrackingCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var TrackingModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TrackingModel();
}
}