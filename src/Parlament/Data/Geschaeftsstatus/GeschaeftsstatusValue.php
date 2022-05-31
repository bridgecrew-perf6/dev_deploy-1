<?php
namespace Parlament\Data\Geschaeftsstatus;
class GeschaeftsstatusValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var GeschaeftsstatusModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftsstatusModel();
}
}