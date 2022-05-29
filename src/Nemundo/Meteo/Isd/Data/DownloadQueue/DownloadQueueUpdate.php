<?php
namespace Nemundo\Meteo\Isd\Data\DownloadQueue;
use Nemundo\Model\Data\AbstractModelUpdate;
class DownloadQueueUpdate extends AbstractModelUpdate {
/**
* @var DownloadQueueModel
*/
public $model;

/**
* @var string
*/
public $stationId;

/**
* @var int
*/
public $year;

/**
* @var bool
*/
public $finished;

public function __construct() {
parent::__construct();
$this->model = new DownloadQueueModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->stationId, $this->stationId);
$this->typeValueList->setModelValue($this->model->year, $this->year);
$this->typeValueList->setModelValue($this->model->finished, $this->finished);
parent::update();
}
}