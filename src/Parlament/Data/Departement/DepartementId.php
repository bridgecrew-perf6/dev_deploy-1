<?php
namespace Parlament\Data\Departement;
use Nemundo\Model\Id\AbstractModelIdValue;
class DepartementId extends AbstractModelIdValue {
/**
* @var DepartementModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DepartementModel();
}
}