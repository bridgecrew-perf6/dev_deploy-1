<?php
namespace Parlament\Data\Beruf;
class BerufExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $beruf;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = BerufModel::class;
$this->externalTableName = "parlament_beruf";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->beruf = new \Nemundo\Model\Type\Text\TextType();
$this->beruf->fieldName = "beruf";
$this->beruf->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->beruf->externalTableName = $this->externalTableName;
$this->beruf->aliasFieldName = $this->beruf->tableName . "_" . $this->beruf->fieldName;
$this->beruf->label = "Beruf";
$this->addType($this->beruf);

}
}