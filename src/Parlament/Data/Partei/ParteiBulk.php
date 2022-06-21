<?php
namespace Parlament\Data\Partei;
class ParteiBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var ParteiModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->abkuerzung, $this->abkuerzung);
$this->typeValueList->setModelValue($this->model->partei, $this->partei);
$id = parent::save();
return $id;
}
}