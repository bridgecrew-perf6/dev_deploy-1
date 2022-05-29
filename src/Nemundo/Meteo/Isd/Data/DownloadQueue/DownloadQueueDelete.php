<?php
namespace Nemundo\Meteo\Isd\Data\DownloadQueue;
class DownloadQueueDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var DownloadQueueModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DownloadQueueModel();
}
}