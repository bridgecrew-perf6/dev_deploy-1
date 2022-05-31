<?php
namespace Parlament\Data\Geschaeftstyp;
class Geschaeftstyp extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var GeschaeftstypModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $geschaeftstyp;

/**
* @var string
*/
public $abk;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftstypModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->geschaeftstyp, $this->geschaeftstyp);
$this->typeValueList->setModelValue($this->model->abk, $this->abk);
$id = parent::save();
return $id;
}
}