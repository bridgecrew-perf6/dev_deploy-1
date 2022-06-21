<?php
namespace Parlament\Data\GeschaeftKommission;
class GeschaeftKommissionCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var GeschaeftKommissionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftKommissionModel();
}
}