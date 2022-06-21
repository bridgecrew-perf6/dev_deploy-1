<?php
namespace Nemundo\Bfs\Gemeinde\Data\Kanton;
use Nemundo\Model\Data\AbstractModelUpdate;
class KantonUpdate extends AbstractModelUpdate {
/**
* @var KantonModel
*/
public $model;

/**
* @var string
*/
public $kantonAbk;

/**
* @var string
*/
public $kanton;

public function __construct() {
parent::__construct();
$this->model = new KantonModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->kantonAbk, $this->kantonAbk);
$this->typeValueList->setModelValue($this->model->kanton, $this->kanton);
parent::update();
}
}