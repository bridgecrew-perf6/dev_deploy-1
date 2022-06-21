<?php
namespace Parlament\Data\Geschaeft;
class GeschaeftDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var GeschaeftModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftModel();
}
}