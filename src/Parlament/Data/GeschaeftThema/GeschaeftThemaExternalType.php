<?php
namespace Parlament\Data\GeschaeftThema;
class GeschaeftThemaExternalType extends \Nemundo\Model\Type\External\ExternalType {
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
public $themaId;

/**
* @var \Parlament\Data\Thema\ThemaExternalType
*/
public $thema;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = GeschaeftThemaModel::class;
$this->externalTableName = "parlament_geschaeft_thema";
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

$this->themaId = new \Nemundo\Model\Type\Id\IdType();
$this->themaId->fieldName = "thema";
$this->themaId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->themaId->aliasFieldName = $this->themaId->tableName ."_".$this->themaId->fieldName;
$this->themaId->label = "Thema";
$this->addType($this->themaId);

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
public function loadThema() {
if ($this->thema == null) {
$this->thema = new \Parlament\Data\Thema\ThemaExternalType(null, $this->parentFieldName . "_thema");
$this->thema->fieldName = "thema";
$this->thema->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->thema->aliasFieldName = $this->thema->tableName ."_".$this->thema->fieldName;
$this->thema->label = "Thema";
$this->addType($this->thema);
}
return $this;
}
}