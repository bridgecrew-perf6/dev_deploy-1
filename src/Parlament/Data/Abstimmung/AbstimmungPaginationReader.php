<?php
namespace Parlament\Data\Abstimmung;
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
* @return \Parlament\Row\AbstimmungCustomRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new \Parlament\Row\AbstimmungCustomRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}