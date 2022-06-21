<?php
namespace Nemundo\Bfs\Abstimmung\Data\Jahr;
class Jahr extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var JahrModel
*/
protected $model;

/**
* @var int
*/
public $id;

public function __construct() {
parent::__construct();
$this->model = new JahrModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$id = parent::save();
return $id;
}
}