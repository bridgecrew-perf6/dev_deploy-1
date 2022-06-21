<?php
namespace Parlament\Data\GeschaeftText;
class GeschaeftTextPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var GeschaeftTextModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextModel();
}
/**
* @return GeschaeftTextRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new GeschaeftTextRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}