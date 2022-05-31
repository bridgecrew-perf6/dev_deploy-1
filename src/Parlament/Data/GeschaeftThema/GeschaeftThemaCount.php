<?php
namespace Parlament\Data\GeschaeftThema;
class GeschaeftThemaCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var GeschaeftThemaModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftThemaModel();
}
}