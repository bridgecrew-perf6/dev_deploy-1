<?php
namespace Nemundo\Meteo\Isd\Data\DownloadQueue;
class DownloadQueue extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var DownloadQueueModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->stationId, $this->stationId);
$this->typeValueList->setModelValue($this->model->year, $this->year);
$this->typeValueList->setModelValue($this->model->finished, $this->finished);
$id = parent::save();
return $id;
}
}