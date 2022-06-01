<?php
namespace Parlament\Data\GeschaeftKommission;
class GeschaeftKommissionDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var GeschaeftKommissionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftKommissionModel();
}
}