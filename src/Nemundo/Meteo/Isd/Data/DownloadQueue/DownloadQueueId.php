<?php
namespace Nemundo\Meteo\Isd\Data\DownloadQueue;
use Nemundo\Model\Id\AbstractModelIdValue;
class DownloadQueueId extends AbstractModelIdValue {
/**
* @var DownloadQueueModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DownloadQueueModel();
}
}