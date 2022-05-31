<?php
namespace Parlament\Data\Legislatur;
class LegislaturValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var LegislaturModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LegislaturModel();
}
}