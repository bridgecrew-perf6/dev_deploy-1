<?php
namespace Parlament\Data\Beruf;
use Nemundo\Model\Data\AbstractModelUpdate;
class BerufUpdate extends AbstractModelUpdate {
/**
* @var BerufModel
*/
public $model;

/**
* @var string
*/
public $beruf;

public function __construct() {
parent::__construct();
$this->model = new BerufModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->beruf, $this->beruf);
parent::update();
}
}