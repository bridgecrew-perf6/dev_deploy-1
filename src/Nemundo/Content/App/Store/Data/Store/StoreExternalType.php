<?php
namespace Nemundo\Content\App\Store\Data\Store;
class StoreExternalType extends \Nemundo\Model\Type\External\ExternalType {
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

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = StoreModel::class;
$this->externalTableName = "store_store";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->uniqueName = new \Nemundo\Model\Type\Text\TextType();
$this->uniqueName->fieldName = "unique_name";
$this->uniqueName->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->uniqueName->externalTableName = $this->externalTableName;
$this->uniqueName->aliasFieldName = $this->uniqueName->tableName . "_" . $this->uniqueName->fieldName;
$this->uniqueName->label = "Unique Name";
$this->addType($this->uniqueName);

$this->storeLabel = new \Nemundo\Model\Type\Text\TextType();
$this->storeLabel->fieldName = "store_label";
$this->storeLabel->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->storeLabel->externalTableName = $this->externalTableName;
$this->storeLabel->aliasFieldName = $this->storeLabel->tableName . "_" . $this->storeLabel->fieldName;
$this->storeLabel->label = "Store Label";
$this->addType($this->storeLabel);

}
}