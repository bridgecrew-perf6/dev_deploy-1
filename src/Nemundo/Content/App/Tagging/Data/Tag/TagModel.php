<?php
namespace Nemundo\Content\App\Tagging\Data\Tag;
class TagModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $tag;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $contentId;

/**
* @var \Nemundo\Content\Data\Content\ContentExternalType
*/
public $content;

protected function loadModel() {
$this->tableName = "tagging_tag";
$this->aliasTableName = "tagging_tag";
$this->label = "Tag";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "tagging_tag";
$this->id->externalTableName = "tagging_tag";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "tagging_tag_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->tag = new \Nemundo\Model\Type\Text\TextType($this);
$this->tag->tableName = "tagging_tag";
$this->tag->externalTableName = "tagging_tag";
$this->tag->fieldName = "tag";
$this->tag->aliasFieldName = "tagging_tag_tag";
$this->tag->label = "Tag";
$this->tag->allowNullValue = false;
$this->tag->length = 255;

$this->contentId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->contentId->tableName = "tagging_tag";
$this->contentId->fieldName = "content";
$this->contentId->aliasFieldName = "tagging_tag_content";
$this->contentId->label = "Content";
$this->contentId->allowNullValue = false;

}
public function loadContent() {
if ($this->content == null) {
$this->content = new \Nemundo\Content\Data\Content\ContentExternalType($this, "tagging_tag_content");
$this->content->tableName = "tagging_tag";
$this->content->fieldName = "content";
$this->content->aliasFieldName = "tagging_tag_content";
$this->content->label = "Content";
}
return $this;
}
}