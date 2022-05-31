<?php
namespace Parlament\Data\KommissionFunktion;
class KommissionFunktionValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var KommissionFunktionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionFunktionModel();
}
}