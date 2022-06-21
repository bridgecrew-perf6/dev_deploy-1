<?php
namespace Parlament\Data\GeschaeftThema;
use Nemundo\Model\Id\AbstractModelIdValue;
class GeschaeftThemaId extends AbstractModelIdValue {
/**
* @var GeschaeftThemaModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftThemaModel();
}
}