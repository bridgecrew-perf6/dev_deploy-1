<?php
namespace Parlament\Data\GeschaeftText;
class GeschaeftTextCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var GeschaeftTextModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextModel();
}
}