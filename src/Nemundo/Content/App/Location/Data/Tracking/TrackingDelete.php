<?php
namespace Nemundo\Content\App\Location\Data\Tracking;
class TrackingDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var TrackingModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TrackingModel();
}
}