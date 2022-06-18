<?php
namespace Nemundo\Meteoschweiz\Data\TopListing;
class TopListingDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var TopListingModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TopListingModel();
}
}