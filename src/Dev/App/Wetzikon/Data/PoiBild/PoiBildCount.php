<?php
namespace Dev\App\Wetzikon\Data\PoiBild;
class PoiBildCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var PoiBildModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new PoiBildModel();
}
}