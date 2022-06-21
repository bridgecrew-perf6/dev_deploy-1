<?php
namespace Parlament\Data\Fraktion;
class FraktionValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var FraktionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new FraktionModel();
}
}