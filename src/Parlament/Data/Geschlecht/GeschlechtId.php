<?php
namespace Parlament\Data\Geschlecht;
use Nemundo\Model\Id\AbstractModelIdValue;
class GeschlechtId extends AbstractModelIdValue {
/**
* @var GeschlechtModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschlechtModel();
}
}