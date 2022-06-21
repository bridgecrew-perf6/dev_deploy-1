<?php
namespace Parlament\Data\RatsmitgliedBeruf;
class RatsmitgliedBerufBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var RatsmitgliedBerufModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->ratsmitgliedId, $this->ratsmitgliedId);
$this->typeValueList->setModelValue($this->model->berufId, $this->berufId);
$id = parent::save();
return $id;
}
}