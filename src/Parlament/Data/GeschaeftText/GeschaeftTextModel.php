<?php
namespace Parlament\Data\GeschaeftText;
class GeschaeftTextModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $geschaeftId;

/**
* @var \Parlament\Data\Geschaeft\GeschaeftExternalType
*/
public $geschaeft;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
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

protected function loadModel() {
$this->tableName = "parlament_geschaeft_text";
$this->aliasTableName = "parlament_geschaeft_text";
$this->label = "Geschäft Text";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_geschaeft_text";
$this->id->externalTableName = "parlament_geschaeft_text";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_geschaeft_text_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->geschaeftId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->geschaeftId->tableName = "parlament_geschaeft_text";
$this->geschaeftId->fieldName = "geschaeft";
$this->geschaeftId->aliasFieldName = "parlament_geschaeft_text_geschaeft";
$this->geschaeftId->label = "Geschäft";
$this->geschaeftId->allowNullValue = false;

$this->textTypId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->textTypId->tableName = "parlament_geschaeft_text";
$this->textTypId->fieldName = "text_typ";
$this->textTypId->aliasFieldName = "parlament_geschaeft_text_text_typ";
$this->textTypId->label = "Text Typ";
$this->textTypId->allowNullValue = false;

$this->text = new \Nemundo\Model\Type\Text\LargeTextType($this);
$this->text->tableName = "parlament_geschaeft_text";
$this->text->externalTableName = "parlament_geschaeft_text";
$this->text->fieldName = "text";
$this->text->aliasFieldName = "parlament_geschaeft_text_text";
$this->text->label = "Text";
$this->text->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "geschaeft";
$index->addType($this->geschaeftId);

}
public function loadGeschaeft() {
if ($this->geschaeft == null) {
$this->geschaeft = new \Parlament\Data\Geschaeft\GeschaeftExternalType($this, "parlament_geschaeft_text_geschaeft");
$this->geschaeft->tableName = "parlament_geschaeft_text";
$this->geschaeft->fieldName = "geschaeft";
$this->geschaeft->aliasFieldName = "parlament_geschaeft_text_geschaeft";
$this->geschaeft->label = "Geschäft";
}
return $this;
}
public function loadTextTyp() {
if ($this->textTyp == null) {
$this->textTyp = new \Parlament\Data\GeschaeftTextTyp\GeschaeftTextTypExternalType($this, "parlament_geschaeft_text_text_typ");
$this->textTyp->tableName = "parlament_geschaeft_text";
$this->textTyp->fieldName = "text_typ";
$this->textTyp->aliasFieldName = "parlament_geschaeft_text_text_typ";
$this->textTyp->label = "Text Typ";
}
return $this;
}
}