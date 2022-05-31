<?php
namespace Parlament\Data\Sprache;
class SpracheExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $code;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $sprache;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = SpracheModel::class;
$this->externalTableName = "parlament_sprache";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->code = new \Nemundo\Model\Type\Text\TextType();
$this->code->fieldName = "code";
$this->code->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->code->externalTableName = $this->externalTableName;
$this->code->aliasFieldName = $this->code->tableName . "_" . $this->code->fieldName;
$this->code->label = "Code";
$this->addType($this->code);

$this->sprache = new \Nemundo\Model\Type\Text\TextType();
$this->sprache->fieldName = "sprache";
$this->sprache->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->sprache->externalTableName = $this->externalTableName;
$this->sprache->aliasFieldName = $this->sprache->tableName . "_" . $this->sprache->fieldName;
$this->sprache->label = "Sprache";
$this->addType($this->sprache);

}
}