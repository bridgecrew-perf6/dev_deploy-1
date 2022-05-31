<?php
namespace Parlament\Data\AbstimmungRatsmitglied;
use Nemundo\Model\Data\AbstractModelUpdate;
class AbstimmungRatsmitgliedUpdate extends AbstractModelUpdate {
/**
* @var AbstimmungRatsmitgliedModel
*/
public $model;

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
public function update() {
$this->typeValueList->setModelValue($this->model->abstimmungId, $this->abstimmungId);
$this->typeValueList->setModelValue($this->model->ratsmitgliedId, $this->ratsmitgliedId);
$this->typeValueList->setModelValue($this->model->entscheidungId, $this->entscheidungId);
parent::update();
}
}