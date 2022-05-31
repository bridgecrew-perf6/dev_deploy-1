<?php
namespace Nemundo\Bfs\Abstimmung\Data\Datum;
class DatumValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var DatumModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DatumModel();
}
}