<?php
namespace Nemundo\Srf\Data\Show;
class ShowModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $show;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $srfId;

/**
* @var \Nemundo\Model\Type\Text\LargeTextType
*/
public $description;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $mediaTypeId;

/**
* @var \Nemundo\Srf\Data\MediaType\MediaTypeExternalType
*/
public $mediaType;

/**
* @var \Nemundo\Model\Type\File\ImageType
*/
public $image;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $crawler;

protected function loadModel() {
$this->tableName = "srf_show";
$this->aliasTableName = "srf_show";
$this->label = "Show";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "srf_show";
$this->id->externalTableName = "srf_show";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "srf_show_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->show = new \Nemundo\Model\Type\Text\TextType($this);
$this->show->tableName = "srf_show";
$this->show->externalTableName = "srf_show";
$this->show->fieldName = "show";
$this->show->aliasFieldName = "srf_show_show";
$this->show->label = "Show";
$this->show->allowNullValue = false;
$this->show->length = 255;

$this->srfId = new \Nemundo\Model\Type\Text\TextType($this);
$this->srfId->tableName = "srf_show";
$this->srfId->externalTableName = "srf_show";
$this->srfId->fieldName = "srf_id";
$this->srfId->aliasFieldName = "srf_show_srf_id";
$this->srfId->label = "Srf Id";
$this->srfId->allowNullValue = false;
$this->srfId->length = 36;

$this->description = new \Nemundo\Model\Type\Text\LargeTextType($this);
$this->description->tableName = "srf_show";
$this->description->externalTableName = "srf_show";
$this->description->fieldName = "description";
$this->description->aliasFieldName = "srf_show_description";
$this->description->label = "Description";
$this->description->allowNullValue = true;

$this->mediaTypeId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->mediaTypeId->tableName = "srf_show";
$this->mediaTypeId->fieldName = "media_type";
$this->mediaTypeId->aliasFieldName = "srf_show_media_type";
$this->mediaTypeId->label = "Media Type";
$this->mediaTypeId->allowNullValue = false;

$this->image = new \Nemundo\Model\Type\File\ImageType($this);
$this->image->tableName = "srf_show";
$this->image->externalTableName = "srf_show";
$this->image->fieldName = "image";
$this->image->aliasFieldName = "srf_show_image";
$this->image->label = "Image";
$this->image->allowNullValue = true;

$this->crawler = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->crawler->tableName = "srf_show";
$this->crawler->externalTableName = "srf_show";
$this->crawler->fieldName = "crawler";
$this->crawler->aliasFieldName = "srf_show_crawler";
$this->crawler->label = "Crawler";
$this->crawler->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "srf_id";
$index->addType($this->srfId);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "media_type";
$index->addType($this->mediaTypeId);

$index = new \Nemundo\Model\Definition\Index\ModelSearchIndex($this);
$index->indexName = "show";
$index->addType($this->show);

}
public function loadMediaType() {
if ($this->mediaType == null) {
$this->mediaType = new \Nemundo\Srf\Data\MediaType\MediaTypeExternalType($this, "srf_show_media_type");
$this->mediaType->tableName = "srf_show";
$this->mediaType->fieldName = "media_type";
$this->mediaType->aliasFieldName = "srf_show_media_type";
$this->mediaType->label = "Media Type";
}
return $this;
}
}