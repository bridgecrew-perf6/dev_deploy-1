<?php
namespace Parlament\Data\Departement;
class DepartementValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var DepartementModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DepartementModel();
}
}