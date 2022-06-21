<?php
namespace Parlament\Data\GeschaeftTextTyp;
class GeschaeftTextTypExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $textTyp;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = GeschaeftTextTypModel::class;
$this->externalTableName = "parlament_geschaeft_text_typ";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->textTyp = new \Nemundo\Model\Type\Text\TextType();
$this->textTyp->fieldName = "text_typ";
$this->textTyp->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->textTyp->externalTableName = $this->externalTableName;
$this->textTyp->aliasFieldName = $this->textTyp->tableName . "_" . $this->textTyp->fieldName;
$this->textTyp->label = "Text Typ";
$this->addType($this->textTyp);

}
}