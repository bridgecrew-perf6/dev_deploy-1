<?php
namespace Parlament\Data\AbstimmungDatum;
class AbstimmungDatumPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var AbstimmungDatumModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungDatumModel();
}
/**
* @return AbstimmungDatumRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new AbstimmungDatumRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}