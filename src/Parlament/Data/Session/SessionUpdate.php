<?php
namespace Parlament\Data\Session;
use Nemundo\Model\Data\AbstractModelUpdate;
class SessionUpdate extends AbstractModelUpdate {
/**
* @var SessionModel
*/
public $model;

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
public function update() {
$this->typeValueList->setModelValue($this->model->session, $this->session);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->von, $this->typeValueList);
$property->setValue($this->von);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->bis, $this->typeValueList);
$property->setValue($this->bis);
parent::update();
}
}