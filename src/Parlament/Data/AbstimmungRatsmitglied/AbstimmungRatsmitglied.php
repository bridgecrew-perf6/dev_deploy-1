<?php
namespace Parlament\Data\AbstimmungRatsmitglied;
class AbstimmungRatsmitglied extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var AbstimmungRatsmitgliedModel
*/
protected $model;

/**
* @var int
*/
public $id;

/**
* @var string
*/
public $abstimmungId;

/**
* @var string
*/
public $ratsmitgliedId;

/**
* @var string
*/
public $entscheidungId;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungRatsmitgliedModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->abstimmungId, $this->abstimmungId);
$this->typeValueList->setModelValue($this->model->ratsmitgliedId, $this->ratsmitgliedId);
$this->typeValueList->setModelValue($this->model->entscheidungId, $this->entscheidungId);
$id = parent::save();
return $id;
}
}