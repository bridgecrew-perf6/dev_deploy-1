<?php
namespace Parlament\Data\Partei;
class ParteiCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var ParteiModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ParteiModel();
}
}