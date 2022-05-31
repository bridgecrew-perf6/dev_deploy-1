<?php
namespace Parlament\Data\Geschaeftstyp;
class GeschaeftstypPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var GeschaeftstypModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftstypModel();
}
/**
* @return GeschaeftstypRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new GeschaeftstypRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}