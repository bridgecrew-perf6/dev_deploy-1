<?php
namespace Parlament\Data\Fraktion;
use Nemundo\Model\Data\AbstractModelUpdate;
class FraktionUpdate extends AbstractModelUpdate {
/**
* @var FraktionModel
*/
public $model;

/**
* @var string
*/
public $fraktion;

/**
* @var string
*/
public $abkuerzung;

/**
* @var bool
*/
public $aktiv;

public function __construct() {
parent::__construct();
$this->model = new FraktionModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->fraktion, $this->fraktion);
$this->typeValueList->setModelValue($this->model->abkuerzung, $this->abkuerzung);
$this->typeValueList->setModelValue($this->model->aktiv, $this->aktiv);
parent::update();
}
}