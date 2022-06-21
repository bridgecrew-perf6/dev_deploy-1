<?php
namespace Parlament\Data\AbstimmungDatum;
class AbstimmungDatumValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var AbstimmungDatumModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungDatumModel();
}
}