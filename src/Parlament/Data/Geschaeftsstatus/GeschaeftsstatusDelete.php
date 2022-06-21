<?php
namespace Parlament\Data\Geschaeftsstatus;
class GeschaeftsstatusDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var GeschaeftsstatusModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftsstatusModel();
}
}