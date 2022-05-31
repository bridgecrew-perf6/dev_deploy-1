<?php
namespace Nemundo\Bfs\Abstimmung\Data\Datum;
class DatumCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var DatumModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DatumModel();
}
}