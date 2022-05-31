<?php
namespace Parlament\Data\Entscheidung;
class EntscheidungPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var EntscheidungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EntscheidungModel();
}
/**
* @return EntscheidungRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new EntscheidungRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}