<?php
namespace Dev\App\Wetzikon\Data\PoiBild;
class PoiBildValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var PoiBildModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new PoiBildModel();
}
}