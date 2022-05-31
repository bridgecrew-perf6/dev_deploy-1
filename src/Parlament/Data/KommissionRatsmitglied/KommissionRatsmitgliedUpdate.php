<?php
namespace Parlament\Data\KommissionRatsmitglied;
use Nemundo\Model\Data\AbstractModelUpdate;
class KommissionRatsmitgliedUpdate extends AbstractModelUpdate {
/**
* @var KommissionRatsmitgliedModel
*/
public $model;

/**
* @var string
*/
public $kommissionId;

/**
* @var string
*/
public $ratsmitgliedId;

/**
* @var bool
*/
public $aktiv;

/**
* @var string
*/
public $funktionId;

public function __construct() {
parent::__construct();
$this->model = new KommissionRatsmitgliedModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->kommissionId, $this->kommissionId);
$this->typeValueList->setModelValue($this->model->ratsmitgliedId, $this->ratsmitgliedId);
$this->typeValueList->setModelValue($this->model->aktiv, $this->aktiv);
$this->typeValueList->setModelValue($this->model->funktionId, $this->funktionId);
parent::update();
}
}