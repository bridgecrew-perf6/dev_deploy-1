<?php
namespace Parlament\Data\RatsmitgliedInteressenbindung;
use Nemundo\Model\Data\AbstractModelUpdate;
class RatsmitgliedInteressenbindungUpdate extends AbstractModelUpdate {
/**
* @var RatsmitgliedInteressenbindungModel
*/
public $model;

/**
* @var string
*/
public $ratsmitgliedId;

/**
* @var string
*/
public $interessenbindungId;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedInteressenbindungModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->ratsmitgliedId, $this->ratsmitgliedId);
$this->typeValueList->setModelValue($this->model->interessenbindungId, $this->interessenbindungId);
parent::update();
}
}