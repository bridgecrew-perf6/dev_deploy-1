<?php
namespace Parlament\Data\Interessenbindung;
use Nemundo\Model\Data\AbstractModelUpdate;
class InteressenbindungUpdate extends AbstractModelUpdate {
/**
* @var InteressenbindungModel
*/
public $model;

/**
* @var string
*/
public $organisation;

public function __construct() {
parent::__construct();
$this->model = new InteressenbindungModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->organisation, $this->organisation);
parent::update();
}
}