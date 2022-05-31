<?php
namespace Nemundo\Bfs\Gemeinde\Data\Bezirk;
class BezirkPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var BezirkModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new BezirkModel();
}
/**
* @return BezirkRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new BezirkRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}