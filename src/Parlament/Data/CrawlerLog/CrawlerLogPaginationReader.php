<?php
namespace Parlament\Data\CrawlerLog;
class CrawlerLogPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
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
$row = new CrawlerLogRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}