<?php
namespace Parlament\Data\KommissionFunktion;
class KommissionFunktionCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var KommissionFunktionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionFunktionModel();
}
}