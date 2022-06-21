<?php
namespace Parlament\Data\Legislatur;
class LegislaturCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var LegislaturModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LegislaturModel();
}
}