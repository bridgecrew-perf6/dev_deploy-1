<?php
namespace Parlament\Data\GeschaeftTextTyp;
class GeschaeftTextTypModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $textTyp;

protected function loadModel() {
$this->tableName = "parlament_geschaeft_text_typ";
$this->aliasTableName = "parlament_geschaeft_text_typ";
$this->label = "Geschäft Text Typ";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_geschaeft_text_typ";
$this->id->externalTableName = "parlament_geschaeft_text_typ";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_geschaeft_text_typ_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->textTyp = new \Nemundo\Model\Type\Text\TextType($this);
$this->textTyp->tableName = "parlament_geschaeft_text_typ";
$this->textTyp->externalTableName = "parlament_geschaeft_text_typ";
$this->textTyp->fieldName = "text_typ";
$this->textTyp->aliasFieldName = "parlament_geschaeft_text_typ_text_typ";
$this->textTyp->label = "Text Typ";
$this->textTyp->allowNullValue = false;
$this->textTyp->length = 255;

}
}