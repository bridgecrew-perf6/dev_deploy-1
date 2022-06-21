<?php
namespace Parlament\Data\Entscheidung;
class EntscheidungCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var EntscheidungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EntscheidungModel();
}
}