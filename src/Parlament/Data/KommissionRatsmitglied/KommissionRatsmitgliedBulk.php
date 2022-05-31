<?php
namespace Parlament\Data\KommissionRatsmitglied;
class KommissionRatsmitgliedBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var KommissionRatsmitgliedModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->kommissionId, $this->kommissionId);
$this->typeValueList->setModelValue($this->model->ratsmitgliedId, $this->ratsmitgliedId);
$this->typeValueList->setModelValue($this->model->aktiv, $this->aktiv);
$this->typeValueList->setModelValue($this->model->funktionId, $this->funktionId);
$id = parent::save();
return $id;
}
}