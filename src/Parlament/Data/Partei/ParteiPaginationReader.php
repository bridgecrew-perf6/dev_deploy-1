<?php
namespace Parlament\Data\Partei;
class ParteiPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var ParteiModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ParteiModel();
}
/**
* @return ParteiRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new ParteiRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}