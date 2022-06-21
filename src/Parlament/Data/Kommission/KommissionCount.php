<?php
namespace Parlament\Data\Kommission;
class KommissionCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var KommissionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionModel();
}
}