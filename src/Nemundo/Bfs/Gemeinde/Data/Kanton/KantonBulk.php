<?php
namespace Nemundo\Bfs\Gemeinde\Data\Kanton;
class KantonBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var KantonModel
*/
protected $model;

/**
* @var int
*/
public $id;

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
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->kantonAbk, $this->kantonAbk);
$this->typeValueList->setModelValue($this->model->kanton, $this->kanton);
$id = parent::save();
return $id;
}
}