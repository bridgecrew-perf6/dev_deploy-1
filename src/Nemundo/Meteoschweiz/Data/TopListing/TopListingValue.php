<?php
namespace Nemundo\Meteoschweiz\Data\TopListing;
class TopListingValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var TopListingModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TopListingModel();
}
}