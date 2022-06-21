<?php
namespace Nemundo\Bfs\Gemeinde\Data\Gemeinde;
class Gemeinde extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var GemeindeModel
*/
protected $model;

/**
* @var int
*/
public $id;

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
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->gemeinde, $this->gemeinde);
$this->typeValueList->setModelValue($this->model->kantonId, $this->kantonId);
$this->typeValueList->setModelValue($this->model->bezirkId, $this->bezirkId);
$id = parent::save();
return $id;
}
}