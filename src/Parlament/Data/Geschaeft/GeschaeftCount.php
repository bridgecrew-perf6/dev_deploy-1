<?php
namespace Parlament\Data\Geschaeft;
class GeschaeftCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var GeschaeftModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftModel();
}
}