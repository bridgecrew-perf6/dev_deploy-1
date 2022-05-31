<?php
namespace Parlament\Data\Legislatur;
class LegislaturPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var LegislaturModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LegislaturModel();
}
/**
* @return LegislaturRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new LegislaturRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}