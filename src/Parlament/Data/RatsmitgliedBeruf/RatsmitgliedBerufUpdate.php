<?php
namespace Parlament\Data\RatsmitgliedBeruf;
use Nemundo\Model\Data\AbstractModelUpdate;
class RatsmitgliedBerufUpdate extends AbstractModelUpdate {
/**
* @var RatsmitgliedBerufModel
*/
public $model;

/**
* @var string
*/
public $ratsmitgliedId;

/**
* @var string
*/
public $berufId;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedBerufModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->ratsmitgliedId, $this->ratsmitgliedId);
$this->typeValueList->setModelValue($this->model->berufId, $this->berufId);
parent::update();
}
}