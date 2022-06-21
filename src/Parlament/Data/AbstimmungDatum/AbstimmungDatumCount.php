<?php
namespace Parlament\Data\AbstimmungDatum;
class AbstimmungDatumCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var AbstimmungDatumModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungDatumModel();
}
}