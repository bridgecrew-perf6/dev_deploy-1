<?php
namespace Nemundo\Meteoschweiz\Data\TopListing;
class TopListingPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var TopListingModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TopListingModel();
}
/**
* @return TopListingRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new TopListingRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}