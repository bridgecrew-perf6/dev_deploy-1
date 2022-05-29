<?php
namespace Nemundo\Meteo\Isd\Data\DownloadQueue;
class DownloadQueuePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
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
$row = new DownloadQueueRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}