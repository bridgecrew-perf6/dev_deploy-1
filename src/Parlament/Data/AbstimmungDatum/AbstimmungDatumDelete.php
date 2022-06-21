<?php
namespace Parlament\Data\AbstimmungDatum;
class AbstimmungDatumDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var AbstimmungDatumModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungDatumModel();
}
}