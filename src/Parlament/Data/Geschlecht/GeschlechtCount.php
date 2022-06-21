<?php
namespace Parlament\Data\Geschlecht;
class GeschlechtCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var GeschlechtModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschlechtModel();
}
}