<?php
namespace Nemundo\Content\App\Store\Data\Store;
class StoreModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $uniqueName;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $storeLabel;

protected function loadModel() {
$this->tableName = "store_store";
$this->aliasTableName = "store_store";
$this->label = "Store";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "store_store";
$this->id->externalTableName = "store_store";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "store_store_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->uniqueName = new \Nemundo\Model\Type\Text\TextType($this);
$this->uniqueName->tableName = "store_store";
$this->uniqueName->externalTableName = "store_store";
$this->uniqueName->fieldName = "unique_name";
$this->uniqueName->aliasFieldName = "store_store_unique_name";
$this->uniqueName->label = "Unique Name";
$this->uniqueName->allowNullValue = false;
$this->uniqueName->length = 50;

$this->storeLabel = new \Nemundo\Model\Type\Text\TextType($this);
$this->storeLabel->tableName = "store_store";
$this->storeLabel->externalTableName = "store_store";
$this->storeLabel->fieldName = "store_label";
$this->storeLabel->aliasFieldName = "store_store_store_label";
$this->storeLabel->label = "Store Label";
$this->storeLabel->allowNullValue = false;
$this->storeLabel->length = 255;

}
}