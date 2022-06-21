<?php
namespace Parlament\Data\Entscheidung;
class EntscheidungValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var EntscheidungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EntscheidungModel();
}
}