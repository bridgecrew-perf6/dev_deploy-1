<?php
namespace Parlament\Data\Rat;
class RatCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var RatModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatModel();
}
}