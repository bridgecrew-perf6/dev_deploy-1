<?php
namespace Nemundo\Bfs\Abstimmung\Data\Datum;
class DatumPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var DatumModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DatumModel();
}
/**
* @return DatumRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new DatumRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}