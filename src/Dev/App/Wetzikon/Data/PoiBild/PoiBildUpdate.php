<?php
namespace Dev\App\Wetzikon\Data\PoiBild;
use Nemundo\Model\Data\AbstractModelUpdate;
class PoiBildUpdate extends AbstractModelUpdate {
/**
* @var PoiBildModel
*/
public $model;

/**
* @var string
*/
public $poiId;

/**
* @var \Nemundo\Model\Data\Property\File\ImageDataProperty
*/
public $bild;

public function __construct() {
parent::__construct();
$this->model = new PoiBildModel();
$this->bild = new \Nemundo\Model\Data\Property\File\ImageDataProperty($this->model->bild, $this->typeValueList);
}
public function update() {
$this->typeValueList->setModelValue($this->model->poiId, $this->poiId);
parent::update();
}
}