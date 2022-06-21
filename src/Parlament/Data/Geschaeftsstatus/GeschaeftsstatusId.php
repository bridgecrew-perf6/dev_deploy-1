<?php
namespace Parlament\Data\Geschaeftsstatus;
use Nemundo\Model\Id\AbstractModelIdValue;
class GeschaeftsstatusId extends AbstractModelIdValue {
/**
* @var GeschaeftsstatusModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftsstatusModel();
}
}