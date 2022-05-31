<?php
namespace Parlament\Data\Departement;
class DepartementCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var DepartementModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DepartementModel();
}
}