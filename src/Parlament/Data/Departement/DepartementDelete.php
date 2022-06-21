<?php
namespace Parlament\Data\Departement;
class DepartementDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var DepartementModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DepartementModel();
}
}