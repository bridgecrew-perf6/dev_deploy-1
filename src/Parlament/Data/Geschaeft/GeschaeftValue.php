<?php
namespace Parlament\Data\Geschaeft;
class GeschaeftValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var GeschaeftModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftModel();
}
}