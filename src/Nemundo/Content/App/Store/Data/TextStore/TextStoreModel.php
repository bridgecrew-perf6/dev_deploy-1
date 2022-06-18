<?php
namespace Nemundo\Content\App\Store\Data\TextStore;
class TextStoreModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $text;

protected function loadModel() {
$this->tableName = "store_text_store";
$this->aliasTableName = "store_text_store";
$this->label = "Text Store";

$this->primaryIndex = new \Nemundo\Db\Index\TextIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "store_text_store";
$this->id->externalTableName = "store_text_store";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "store_text_store_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->text = new \Nemundo\Model\Type\Text\TextType($this);
$this->text->tableName = "store_text_store";
$this->text->externalTableName = "store_text_store";
$this->text->fieldName = "text";
$this->text->aliasFieldName = "store_text_store_text";
$this->text->label = "Text";
$this->text->allowNullValue = false;
$this->text->length = 255;

}
}