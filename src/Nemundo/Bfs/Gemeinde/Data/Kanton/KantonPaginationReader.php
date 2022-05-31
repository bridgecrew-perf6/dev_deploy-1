<?php
namespace Nemundo\Bfs\Gemeinde\Data\Kanton;
class KantonPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var KantonModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KantonModel();
}
/**
* @return KantonRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new KantonRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}