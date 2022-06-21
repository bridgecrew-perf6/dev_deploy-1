<?php
namespace Parlament\Data\Geschlecht;
class GeschlechtValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var GeschlechtModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschlechtModel();
}
}