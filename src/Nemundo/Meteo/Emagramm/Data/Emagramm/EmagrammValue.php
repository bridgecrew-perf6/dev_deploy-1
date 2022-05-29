<?php
namespace Nemundo\Meteo\Emagramm\Data\Emagramm;
class EmagrammValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var EmagrammModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EmagrammModel();
}
}