<?php
namespace Parlament\Data\Fraktion;
class FraktionCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var FraktionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new FraktionModel();
}
}