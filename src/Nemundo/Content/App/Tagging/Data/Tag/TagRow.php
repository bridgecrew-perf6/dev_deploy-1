<?php
namespace Nemundo\Content\App\Tagging\Data\Tag;
class TagRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var TagModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $tag;

/**
* @var int
*/
public $contentId;

/**
* @var \Nemundo\Content\Row\ContentCustomRow
*/
public $content;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->tag = $this->getModelValue($model->tag);
$this->contentId = intval($this->getModelValue($model->contentId));
if ($model->content !== null) {
$this->loadNemundoContentDataContentContentcontentRow($model->content);
}
}
private function loadNemundoContentDataContentContentcontentRow($model) {
$this->content = new \Nemundo\Content\Row\ContentCustomRow($this->row, $model);
}
}