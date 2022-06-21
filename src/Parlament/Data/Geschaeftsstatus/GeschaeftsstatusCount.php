<?php
namespace Parlament\Data\Geschaeftsstatus;
class GeschaeftsstatusCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var GeschaeftsstatusModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftsstatusModel();
}
}