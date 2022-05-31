<?php
namespace Nemundo\Bfs\Gemeinde\Data\Bezirk;
use Nemundo\Model\Data\AbstractModelUpdate;
class BezirkUpdate extends AbstractModelUpdate {
/**
* @var BezirkModel
*/
public $model;

/**
* @var string
*/
public $bezirk;

/**
* @var string
*/
public $kantonId;

public function __construct() {
parent::__construct();
$this->model = new BezirkModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->bezirk, $this->bezirk);
$this->typeValueList->setModelValue($this->model->kantonId, $this->kantonId);
parent::update();
}
}