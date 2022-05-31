<?php
namespace Parlament\Data\Legislatur;
class LegislaturDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var LegislaturModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LegislaturModel();
}
}