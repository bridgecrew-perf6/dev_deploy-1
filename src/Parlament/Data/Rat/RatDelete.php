<?php
namespace Parlament\Data\Rat;
class RatDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var RatModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatModel();
}
}