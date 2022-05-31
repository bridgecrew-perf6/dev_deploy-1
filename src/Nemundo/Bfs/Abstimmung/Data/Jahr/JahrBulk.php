<?php
namespace Nemundo\Bfs\Abstimmung\Data\Jahr;
class JahrBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
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