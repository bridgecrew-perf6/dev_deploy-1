<?php
namespace Nemundo\Content\App\Tagging\Data\Tag;
class Tag extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var TagModel
*/
protected $model;

/**
* @var string
*/
public $tag;

/**
* @var string
*/
public $contentId;

public function __construct() {
parent::__construct();
$this->model = new TagModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->tag, $this->tag);
$this->typeValueList->setModelValue($this->model->contentId, $this->contentId);
$id = parent::save();
return $id;
}
}