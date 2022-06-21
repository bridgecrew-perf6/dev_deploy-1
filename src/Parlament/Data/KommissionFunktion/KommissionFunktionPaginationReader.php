<?php
namespace Parlament\Data\KommissionFunktion;
class KommissionFunktionPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var KommissionFunktionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionFunktionModel();
}
/**
* @return KommissionFunktionRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new KommissionFunktionRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}