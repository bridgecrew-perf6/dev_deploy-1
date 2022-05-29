<?php
namespace Nemundo\Meteo\Isd\Data\DownloadQueue;
class DownloadQueueValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var DownloadQueueModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DownloadQueueModel();
}
}