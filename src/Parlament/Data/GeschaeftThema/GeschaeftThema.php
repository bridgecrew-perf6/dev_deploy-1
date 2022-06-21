<?php
namespace Parlament\Data\GeschaeftThema;
class GeschaeftThema extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var GeschaeftThemaModel
*/
protected $model;

/**
* @var string
*/
public $geschaeftId;

/**
* @var string
*/
public $themaId;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftThemaModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->geschaeftId, $this->geschaeftId);
$this->typeValueList->setModelValue($this->model->themaId, $this->themaId);
$id = parent::save();
return $id;
}
}