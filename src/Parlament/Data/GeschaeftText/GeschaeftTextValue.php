<?php
namespace Parlament\Data\GeschaeftText;
class GeschaeftTextValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var GeschaeftTextModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextModel();
}
}