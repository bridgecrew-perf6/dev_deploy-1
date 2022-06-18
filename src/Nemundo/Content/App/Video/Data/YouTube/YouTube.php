<?php
namespace Nemundo\Content\App\Video\Data\YouTube;
class YouTube extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var YouTubeModel
*/
protected $model;

/**
* @var string
*/
public $youtubeId;

/**
* @var string
*/
public $title;

/**
* @var string
*/
public $description;

/**
* @var int
*/
public $start;

public function __construct() {
parent::__construct();
$this->model = new YouTubeModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->youtubeId, $this->youtubeId);
$this->typeValueList->setModelValue($this->model->title, $this->title);
$this->typeValueList->setModelValue($this->model->description, $this->description);
$this->typeValueList->setModelValue($this->model->start, $this->start);
$id = parent::save();
return $id;
}
}