<?php
namespace Parlament\Data\Partei;
use Nemundo\Model\Data\AbstractModelUpdate;
class ParteiUpdate extends AbstractModelUpdate {
/**
* @var ParteiModel
*/
public $model;

/**
* @var string
*/
public $abkuerzung;

/**
* @var string
*/
public $partei;

public function __construct() {
parent::__construct();
$this->model = new ParteiModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->abkuerzung, $this->abkuerzung);
$this->typeValueList->setModelValue($this->model->partei, $this->partei);
parent::update();
}
}