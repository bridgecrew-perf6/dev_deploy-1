<?phpnamespace Nemundo\Meteo\Eumetsat\Data\ImageType;class ImageTypeModel extends \Nemundo\Model\Definition\Model\AbstractModel {/*** @var \Nemundo\Model\Type\Id\IdType*/public $id;/*** @var \Nemundo\Model\Type\Text\TextType*/public $imageTypeName;/*** @var \Nemundo\Model\Type\Text\TextType*/public $imageType;protected function loadModel() {$this->tableName = "eumetsat_image_type";$this->aliasTableName = "eumetsat_image_type";$this->label = "Image Type";$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();$this->id = new \Nemundo\Model\Type\Id\IdType($this);$this->id->tableName = "eumetsat_image_type";$this->id->fieldName = "id";$this->id->aliasFieldName = "eumetsat_image_type_id";$this->id->label = "Id";$this->id->allowNullValue = false;$this->imageTypeName = new \Nemundo\Model\Type\Text\TextType($this);$this->imageTypeName->tableName = "eumetsat_image_type";$this->imageTypeName->fieldName = "image_type_name";$this->imageTypeName->aliasFieldName = "eumetsat_image_type_image_type_name";$this->imageTypeName->label = "Image Type Name";$this->imageTypeName->allowNullValue = false;$this->imageTypeName->length = 20;$this->imageType = new \Nemundo\Model\Type\Text\TextType($this);$this->imageType->tableName = "eumetsat_image_type";$this->imageType->fieldName = "image_type";$this->imageType->aliasFieldName = "eumetsat_image_type_image_type";$this->imageType->label = "Image Type";$this->imageType->allowNullValue = false;$this->imageType->length = 255;$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);$index->indexName = "image_type_name";$index->addType($this->imageTypeName);}}