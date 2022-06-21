<?php
namespace Parlament\Data\Session;
class SessionDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var SessionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new SessionModel();
}
}