<?php
namespace Parlament\Data\Interessenbindung;
class Interessenbindung extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var InteressenbindungModel
*/
protected $model;

/**
* @var string
*/
public $organisation;

public function __construct() {
parent::__construct();
$this->model = new InteressenbindungModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->organisation, $this->organisation);
$id = parent::save();
return $id;
}
}