<?php
namespace Dev\App\Wetzikon\Data\PoiBild;
class PoiBildDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var PoiBildModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new PoiBildModel();
}
}