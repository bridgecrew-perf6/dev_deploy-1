<?php
namespace Parlament\Data\Geschaeftstyp;
class GeschaeftstypCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var GeschaeftstypModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftstypModel();
}
}