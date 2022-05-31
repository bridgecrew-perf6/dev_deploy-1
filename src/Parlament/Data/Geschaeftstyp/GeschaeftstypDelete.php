<?php
namespace Parlament\Data\Geschaeftstyp;
class GeschaeftstypDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var GeschaeftstypModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftstypModel();
}
}