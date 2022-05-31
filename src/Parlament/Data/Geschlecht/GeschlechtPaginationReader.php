<?php
namespace Parlament\Data\Geschlecht;
class GeschlechtPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var GeschlechtModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschlechtModel();
}
/**
* @return GeschlechtRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new GeschlechtRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}