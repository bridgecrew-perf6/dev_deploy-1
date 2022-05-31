<?php
namespace Parlament\Data\Entscheidung;
class EntscheidungBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var EntscheidungModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $entscheidung;

public function __construct() {
parent::__construct();
$this->model = new EntscheidungModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->entscheidung, $this->entscheidung);
$id = parent::save();
return $id;
}
}