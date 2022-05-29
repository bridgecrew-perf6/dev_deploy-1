<?php
namespace Nemundo\Meteo\Isd\Data\DownloadQueue;
class DownloadQueueCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var DownloadQueueModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DownloadQueueModel();
}
}