<?php
namespace Parlament\Data\Session;
class Session extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var SessionModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $session;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $von;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $bis;

public function __construct() {
parent::__construct();
$this->model = new SessionModel();
$this->von = new \Nemundo\Core\Type\DateTime\Date();
$this->bis = new \Nemundo\Core\Type\DateTime\Date();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->session, $this->session);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->von, $this->typeValueList);
$property->setValue($this->von);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->bis, $this->typeValueList);
$property->setValue($this->bis);
$id = parent::save();
return $id;
}
}