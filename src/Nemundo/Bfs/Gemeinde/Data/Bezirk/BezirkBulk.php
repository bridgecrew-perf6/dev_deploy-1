<?php
namespace Nemundo\Bfs\Gemeinde\Data\Bezirk;
class BezirkBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var BezirkModel
*/
protected $model;

/**
* @var int
*/
public $id;

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
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->bezirk, $this->bezirk);
$this->typeValueList->setModelValue($this->model->kantonId, $this->kantonId);
$id = parent::save();
return $id;
}
}