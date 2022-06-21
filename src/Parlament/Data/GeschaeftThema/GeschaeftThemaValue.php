<?php
namespace Parlament\Data\GeschaeftThema;
class GeschaeftThemaValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var GeschaeftThemaModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftThemaModel();
}
}