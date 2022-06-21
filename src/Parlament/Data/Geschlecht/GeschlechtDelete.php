<?php
namespace Parlament\Data\Geschlecht;
class GeschlechtDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var GeschlechtModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschlechtModel();
}
}