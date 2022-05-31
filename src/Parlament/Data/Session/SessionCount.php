<?php
namespace Parlament\Data\Session;
class SessionCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var SessionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new SessionModel();
}
}