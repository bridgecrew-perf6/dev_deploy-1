<?php
namespace Nemundo\Meteo\Emagramm\Data\Emagramm;
class EmagrammCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var EmagrammModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EmagrammModel();
}
}