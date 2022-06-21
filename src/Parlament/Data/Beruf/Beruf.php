<?php
namespace Parlament\Data\Beruf;
class Beruf extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var BerufModel
*/
protected $model;

/**
* @var string
*/
public $beruf;

public function __construct() {
parent::__construct();
$this->model = new BerufModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->beruf, $this->beruf);
$id = parent::save();
return $id;
}
}