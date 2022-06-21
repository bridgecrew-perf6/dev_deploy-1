<?php
namespace Parlament\Data\Beruf;
class BerufPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var BerufModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new BerufModel();
}
/**
* @return BerufRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new BerufRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}