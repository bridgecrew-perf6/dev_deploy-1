<?php
namespace Dev\App\Wetzikon\Data\PoiBild;
use Nemundo\Model\Id\AbstractModelIdValue;
class PoiBildId extends AbstractModelIdValue {
/**
* @var PoiBildModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new PoiBildModel();
}
}