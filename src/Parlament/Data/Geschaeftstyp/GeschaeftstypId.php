<?php
namespace Parlament\Data\Geschaeftstyp;
use Nemundo\Model\Id\AbstractModelIdValue;
class GeschaeftstypId extends AbstractModelIdValue {
/**
* @var GeschaeftstypModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftstypModel();
}
}