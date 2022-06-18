<?php
namespace Nemundo\Meteoschweiz\Data\TopListing;
use Nemundo\Model\Id\AbstractModelIdValue;
class TopListingId extends AbstractModelIdValue {
/**
* @var TopListingModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TopListingModel();
}
}