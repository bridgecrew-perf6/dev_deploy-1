<?php
namespace Parlament\Data\AbstimmungDatum;
use Nemundo\Model\Id\AbstractModelIdValue;
class AbstimmungDatumId extends AbstractModelIdValue {
/**
* @var AbstimmungDatumModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungDatumModel();
}
}