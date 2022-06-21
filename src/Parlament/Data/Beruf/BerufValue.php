<?php
namespace Parlament\Data\Beruf;
class BerufValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var BerufModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new BerufModel();
}
}