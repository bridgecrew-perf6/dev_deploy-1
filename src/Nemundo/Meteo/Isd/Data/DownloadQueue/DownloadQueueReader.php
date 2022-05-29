<?php
namespace Nemundo\Meteo\Isd\Data\DownloadQueue;
class DownloadQueueReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var DownloadQueueModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DownloadQueueModel();
}
/**
* @return DownloadQueueRow[]
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
* @return DownloadQueueRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return DownloadQueueRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new DownloadQueueRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}