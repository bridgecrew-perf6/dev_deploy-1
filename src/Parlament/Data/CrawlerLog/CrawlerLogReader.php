<?php
namespace Parlament\Data\CrawlerLog;
class CrawlerLogReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var CrawlerLogModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CrawlerLogModel();
}
/**
* @return CrawlerLogRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = $this->getModelRow($dataRow);
$list[] = $row;
}
return $list;
}
/**
* @return CrawlerLogRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return CrawlerLogRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new CrawlerLogRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}