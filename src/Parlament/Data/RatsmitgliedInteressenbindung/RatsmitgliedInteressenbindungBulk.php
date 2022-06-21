<?php
namespace Parlament\Data\RatsmitgliedInteressenbindung;
class RatsmitgliedInteressenbindungBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var RatsmitgliedInteressenbindungModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->ratsmitgliedId, $this->ratsmitgliedId);
$this->typeValueList->setModelValue($this->model->interessenbindungId, $this->interessenbindungId);
$id = parent::save();
return $id;
}
}