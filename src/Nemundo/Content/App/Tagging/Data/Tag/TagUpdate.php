<?php
namespace Nemundo\Content\App\Tagging\Data\Tag;
use Nemundo\Model\Data\AbstractModelUpdate;
class TagUpdate extends AbstractModelUpdate {
/**
* @var TagModel
*/
public $model;

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
public function update() {
$this->typeValueList->setModelValue($this->model->tag, $this->tag);
$this->typeValueList->setModelValue($this->model->contentId, $this->contentId);
parent::update();
}
}