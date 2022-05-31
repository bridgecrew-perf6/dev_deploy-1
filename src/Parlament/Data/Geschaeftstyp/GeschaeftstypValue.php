<?php
namespace Parlament\Data\Geschaeftstyp;
class GeschaeftstypValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var GeschaeftstypModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftstypModel();
}
}