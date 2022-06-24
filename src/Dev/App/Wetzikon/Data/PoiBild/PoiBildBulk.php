<?php
namespace Dev\App\Wetzikon\Data\PoiBild;
class PoiBildBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var PoiBildModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->poiId, $this->poiId);
$id = parent::save();
return $id;
}
}