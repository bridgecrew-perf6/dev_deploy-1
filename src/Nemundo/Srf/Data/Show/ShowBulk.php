<?php
namespace Nemundo\Srf\Data\Show;
class ShowBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var ShowModel
*/
protected $model;

/**
* @var string
*/
public $show;

/**
* @var string
*/
public $srfId;

/**
* @var string
*/
public $description;

/**
* @var string
*/
public $mediaTypeId;

/**
* @var \Nemundo\Model\Data\Property\File\ImageDataProperty
*/
public $image;

/**
* @var bool
*/
public $crawler;

public function __construct() {
parent::__construct();
$this->model = new ShowModel();
$this->image = new \Nemundo\Model\Data\Property\File\ImageDataProperty($this->model->image, $this->typeValueList);
}
public function save() {
$this->typeValueList->setModelValue($this->model->show, $this->show);
$this->typeValueList->setModelValue($this->model->srfId, $this->srfId);
$this->typeValueList->setModelValue($this->model->description, $this->description);
$this->typeValueList->setModelValue($this->model->mediaTypeId, $this->mediaTypeId);
$this->typeValueList->setModelValue($this->model->crawler, $this->crawler);
$id = parent::save();
return $id;
}
}