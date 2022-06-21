<?php
namespace Parlament\Data\GeschaeftKommission;
class GeschaeftKommissionValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var GeschaeftKommissionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftKommissionModel();
}
}