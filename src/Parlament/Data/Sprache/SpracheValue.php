<?php
namespace Parlament\Data\Sprache;
class SpracheValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var SpracheModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new SpracheModel();
}
}