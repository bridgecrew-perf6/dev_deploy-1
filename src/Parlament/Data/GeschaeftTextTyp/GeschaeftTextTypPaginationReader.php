<?php
namespace Parlament\Data\GeschaeftTextTyp;
class GeschaeftTextTypPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var GeschaeftTextTypModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextTypModel();
}
/**
* @return GeschaeftTextTypRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new GeschaeftTextTypRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}