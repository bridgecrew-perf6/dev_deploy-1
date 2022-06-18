<?php
namespace Nemundo\Content\App\Store\Data\LargeTextStore;
class LargeTextStoreModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\LargeTextType
*/
public $largeText;

protected function loadModel() {
$this->tableName = "store_large_text_store";
$this->aliasTableName = "store_large_text_store";
$this->label = "Large Text Store";

$this->primaryIndex = new \Nemundo\Db\Index\TextIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "store_large_text_store";
$this->id->externalTableName = "store_large_text_store";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "store_large_text_store_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->largeText = new \Nemundo\Model\Type\Text\LargeTextType($this);
$this->largeText->tableName = "store_large_text_store";
$this->largeText->externalTableName = "store_large_text_store";
$this->largeText->fieldName = "large_text";
$this->largeText->aliasFieldName = "store_large_text_store_large_text";
$this->largeText->label = "Large Text";
$this->largeText->allowNullValue = false;

}
}