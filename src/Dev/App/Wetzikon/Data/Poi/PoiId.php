<?php
namespace Dev\App\Wetzikon\Data\Poi;
use Nemundo\Model\Id\AbstractModelIdValue;
class PoiId extends AbstractModelIdValue {
/**
* @var PoiModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new PoiModel();
}
}