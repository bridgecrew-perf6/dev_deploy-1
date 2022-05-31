<?php
namespace Parlament\Data\Geschaeft;
class GeschaeftPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var GeschaeftModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftModel();
}
/**
* @return \Parlament\Row\GeschaeftCustomRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new \Parlament\Row\GeschaeftCustomRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}