<?php
namespace Nemundo\Content\App\Location\Data\Tracking;
class TrackingPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var TrackingModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TrackingModel();
}
/**
* @return TrackingRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new TrackingRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}