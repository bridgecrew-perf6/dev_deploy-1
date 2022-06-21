<?php
namespace Parlament\Data\Kommission;
class KommissionBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var KommissionModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $kommission;

/**
* @var bool
*/
public $aktiv;

/**
* @var string
*/
public $ratId;

public function __construct() {
parent::__construct();
$this->model = new KommissionModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->kommission, $this->kommission);
$this->typeValueList->setModelValue($this->model->aktiv, $this->aktiv);
$this->typeValueList->setModelValue($this->model->ratId, $this->ratId);
$id = parent::save();
return $id;
}
}