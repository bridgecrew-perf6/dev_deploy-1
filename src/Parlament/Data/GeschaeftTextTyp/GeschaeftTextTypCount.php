<?php
namespace Parlament\Data\GeschaeftTextTyp;
class GeschaeftTextTypCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var GeschaeftTextTypModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextTypModel();
}
}