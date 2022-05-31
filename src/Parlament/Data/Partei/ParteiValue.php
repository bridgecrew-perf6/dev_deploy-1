<?php
namespace Parlament\Data\Partei;
class ParteiValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var ParteiModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ParteiModel();
}
}