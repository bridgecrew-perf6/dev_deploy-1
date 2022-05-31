<?php
namespace Nemundo\Bfs\Gemeinde\Data\Gemeinde;
use Nemundo\Model\Data\AbstractModelUpdate;
class GemeindeUpdate extends AbstractModelUpdate {
/**
* @var GemeindeModel
*/
public $model;

/**
* @var string
*/
public $gemeinde;

/**
* @var string
*/
public $kantonId;

/**
* @var string
*/
public $bezirkId;

public function __construct() {
parent::__construct();
$this->model = new GemeindeModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->gemeinde, $this->gemeinde);
$this->typeValueList->setModelValue($this->model->kantonId, $this->kantonId);
$this->typeValueList->setModelValue($this->model->bezirkId, $this->bezirkId);
parent::update();
}
}