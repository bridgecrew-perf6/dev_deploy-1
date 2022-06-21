<?php
namespace Nemundo\Bfs\Abstimmung\Data\Jahr;
class JahrPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var JahrModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new JahrModel();
}
/**
* @return JahrRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new JahrRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}