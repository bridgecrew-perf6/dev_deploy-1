<?php
namespace Parlament\Data\Session;
class SessionValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var SessionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new SessionModel();
}
}