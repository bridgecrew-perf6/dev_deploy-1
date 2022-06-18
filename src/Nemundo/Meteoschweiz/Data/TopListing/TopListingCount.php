<?php
namespace Nemundo\Meteoschweiz\Data\TopListing;
class TopListingCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var TopListingModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TopListingModel();
}
}