<?php
namespace Nemundo\Content\App\Feed\Data\Feed;
class FeedBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var FeedModel
*/
protected $model;

/**
* @var string
*/
public $feedUrl;

/**
* @var string
*/
public $title;

/**
* @var string
*/
public $description;

/**
* @var \Nemundo\Model\Data\Property\File\ImageDataProperty
*/
public $feedImage;

public function __construct() {
parent::__construct();
$this->model = new FeedModel();
$this->feedImage = new \Nemundo\Model\Data\Property\File\ImageDataProperty($this->model->feedImage, $this->typeValueList);
}
public function save() {
$this->typeValueList->setModelValue($this->model->feedUrl, $this->feedUrl);
$this->typeValueList->setModelValue($this->model->title, $this->title);
$this->typeValueList->setModelValue($this->model->description, $this->description);
$id = parent::save();
return $id;
}
}