<?php
namespace Parlament\Data\Session;
use Nemundo\Model\Id\AbstractModelIdValue;
class SessionId extends AbstractModelIdValue {
/**
* @var SessionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new SessionModel();
}
}