<?php
namespace Parlament\Data\Geschaeftstyp;
class GeschaeftstypBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
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

public function __construct() {
parent::__construct();
$this->model = new GeschaeftstypModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->geschaeftstyp, $this->geschaeftstyp);
$id = parent::save();
return $id;
}
}