<?php
namespace Nemundo\Meteoschweiz\Data\TopListing;
use Nemundo\Model\Data\AbstractModelUpdate;
class TopListingUpdate extends AbstractModelUpdate {
/**
* @var TopListingModel
*/
public $model;

/**
* @var int
*/
public $listingLimit;

public function __construct() {
parent::__construct();
$this->model = new TopListingModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->listingLimit, $this->listingLimit);
parent::update();
}
}