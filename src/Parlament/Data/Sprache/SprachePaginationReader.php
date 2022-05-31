<?php
namespace Parlament\Data\Sprache;
class SprachePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var SpracheModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new SpracheModel();
}
/**
* @return SpracheRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new SpracheRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}