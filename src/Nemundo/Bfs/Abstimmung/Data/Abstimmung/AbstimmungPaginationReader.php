<?php
namespace Nemundo\Bfs\Abstimmung\Data\Abstimmung;
class AbstimmungPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var AbstimmungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungModel();
}
/**
* @return AbstimmungRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new AbstimmungRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}