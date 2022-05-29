<?php
namespace Nemundo\Meteo\Emagramm\Data\Emagramm;
use Nemundo\Model\Data\AbstractModelUpdate;
class EmagrammUpdate extends AbstractModelUpdate {
/**
* @var EmagrammModel
*/
public $model;

/**
* @var \Nemundo\Model\Data\Property\File\ImageDataProperty
*/
public $image;

/**
* @var \Nemundo\Core\Type\DateTime\DateTime
*/
public $dateTime;

/**
* @var string
*/
public $locationId;

public function __construct() {
parent::__construct();
$this->model = new EmagrammModel();
$this->image = new \Nemundo\Model\Data\Property\File\ImageDataProperty($this->model->image, $this->typeValueList);
$this->dateTime = new \Nemundo\Core\Type\DateTime\DateTime();
}
public function update() {
$property = new \Nemundo\Model\Data\Property\DateTime\DateTimeDataProperty($this->model->dateTime, $this->typeValueList);
$property->setValue($this->dateTime);
$this->typeValueList->setModelValue($this->model->locationId, $this->locationId);
parent::update();
}
}