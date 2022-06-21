<?php
namespace Parlament\Data\GeschaeftKommission;
class GeschaeftKommissionPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var GeschaeftKommissionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftKommissionModel();
}
/**
* @return GeschaeftKommissionRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new GeschaeftKommissionRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}