<?php
namespace Nemundo\Meteo\Emagramm\Data\Emagramm;
class EmagrammBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var EmagrammModel
*/
protected $model;

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
public function save() {
$property = new \Nemundo\Model\Data\Property\DateTime\DateTimeDataProperty($this->model->dateTime, $this->typeValueList);
$property->setValue($this->dateTime);
$this->typeValueList->setModelValue($this->model->locationId, $this->locationId);
$id = parent::save();
return $id;
}
}