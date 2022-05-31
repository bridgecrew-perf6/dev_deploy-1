<?php
namespace Parlament\Data\GeschaeftThema;
class GeschaeftThemaPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var GeschaeftThemaModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftThemaModel();
}
/**
* @return GeschaeftThemaRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new GeschaeftThemaRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}