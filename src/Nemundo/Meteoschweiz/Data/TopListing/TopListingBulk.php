<?php
namespace Nemundo\Meteoschweiz\Data\TopListing;
class TopListingBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var TopListingModel
*/
protected $model;

/**
* @var int
*/
public $listingLimit;

public function __construct() {
parent::__construct();
$this->model = new TopListingModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->listingLimit, $this->listingLimit);
$id = parent::save();
return $id;
}
}