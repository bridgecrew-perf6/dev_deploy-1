<?php
namespace Parlament\Data\Geschaeft;
use Nemundo\Model\Id\AbstractModelIdValue;
class GeschaeftId extends AbstractModelIdValue {
/**
* @var GeschaeftModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftModel();
}
}