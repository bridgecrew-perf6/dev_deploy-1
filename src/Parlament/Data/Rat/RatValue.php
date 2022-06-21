<?php
namespace Parlament\Data\Rat;
class RatValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var RatModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatModel();
}
}