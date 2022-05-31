<?php
namespace Parlament\Data\Sprache;
class SpracheCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var SpracheModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new SpracheModel();
}
}