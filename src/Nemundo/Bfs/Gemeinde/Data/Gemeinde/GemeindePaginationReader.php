<?php
namespace Nemundo\Bfs\Gemeinde\Data\Gemeinde;
class GemeindePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var GemeindeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GemeindeModel();
}
/**
* @return GemeindeRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new GemeindeRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}