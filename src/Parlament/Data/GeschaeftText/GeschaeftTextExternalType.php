<?php
namespace Parlament\Data\GeschaeftText;
class GeschaeftTextExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $geschaeftId;

/**
* @var \Parlament\Data\Geschaeft\GeschaeftExternalType
*/
public $geschaeft;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $textTypId;

/**
* @var \Parlament\Data\GeschaeftTextTyp\GeschaeftTextTypExternalType
*/
public $textTyp;

/**
* @var \Nemundo\Model\Type\Text\LargeTextType
*/
public $text;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = GeschaeftTextModel::class;
$this->externalTableName = "parlament_geschaeft_text";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->geschaeftId = new \Nemundo\Model\Type\Id\IdType();
$this->geschaeftId->fieldName = "geschaeft";
$this->geschaeftId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geschaeftId->aliasFieldName = $this->geschaeftId->tableName ."_".$this->geschaeftId->fieldName;
$this->geschaeftId->label = "Geschäft";
$this->addType($this->geschaeftId);

$this->textTypId = new \Nemundo\Model\Type\Id\IdType();
$this->textTypId->fieldName = "text_typ";
$this->textTypId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->textTypId->aliasFieldName = $this->textTypId->tableName ."_".$this->textTypId->fieldName;
$this->textTypId->label = "Text Typ";
$this->addType($this->textTypId);

$this->text = new \Nemundo\Model\Type\Text\LargeTextType();
$this->text->fieldName = "text";
$this->text->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->text->externalTableName = $this->externalTableName;
$this->text->aliasFieldName = $this->text->tableName . "_" . $this->text->fieldName;
$this->text->label = "Text";
$this->addType($this->text);

}
public function loadGeschaeft() {
if ($this->geschaeft == null) {
$this->geschaeft = new \Parlament\Data\Geschaeft\GeschaeftExternalType(null, $this->parentFieldName . "_geschaeft");
$this->geschaeft->fieldName = "geschaeft";
$this->geschaeft->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geschaeft->aliasFieldName = $this->geschaeft->tableName ."_".$this->geschaeft->fieldName;
$this->geschaeft->label = "Geschäft";
$this->addType($this->geschaeft);
}
return $this;
}
public function loadTextTyp() {
if ($this->textTyp == null) {
$this->textTyp = new \Parlament\Data\GeschaeftTextTyp\GeschaeftTextTypExternalType(null, $this->parentFieldName . "_text_typ");
$this->textTyp->fieldName = "text_typ";
$this->textTyp->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->textTyp->aliasFieldName = $this->textTyp->tableName ."_".$this->textTyp->fieldName;
$this->textTyp->label = "Text Typ";
$this->addType($this->textTyp);
}
return $this;
}
}