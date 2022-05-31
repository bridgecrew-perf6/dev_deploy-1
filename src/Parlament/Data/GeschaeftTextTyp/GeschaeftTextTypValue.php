<?php
namespace Parlament\Data\GeschaeftTextTyp;
class GeschaeftTextTypValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var GeschaeftTextTypModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextTypModel();
}
}