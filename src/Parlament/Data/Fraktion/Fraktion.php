<?php
namespace Parlament\Data\Fraktion;
class Fraktion extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var FraktionModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $fraktion;

/**
* @var string
*/
public $abkuerzung;

/**
* @var bool
*/
public $aktiv;

public function __construct() {
parent::__construct();
$this->model = new FraktionModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->fraktion, $this->fraktion);
$this->typeValueList->setModelValue($this->model->abkuerzung, $this->abkuerzung);
$this->typeValueList->setModelValue($this->model->aktiv, $this->aktiv);
$id = parent::save();
return $id;
}
}