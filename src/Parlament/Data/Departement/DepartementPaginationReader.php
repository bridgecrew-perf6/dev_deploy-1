<?php
namespace Parlament\Data\Departement;
class DepartementPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var DepartementModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DepartementModel();
}
/**
* @return DepartementRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new DepartementRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}