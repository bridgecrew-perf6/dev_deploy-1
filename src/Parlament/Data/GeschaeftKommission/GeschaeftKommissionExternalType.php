<?php
namespace Parlament\Data\GeschaeftKommission;
class GeschaeftKommissionExternalType extends \Nemundo\Model\Type\External\ExternalType {
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
public $kommissionId;

/**
* @var \Parlament\Data\Kommission\KommissionExternalType
*/
public $kommission;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = GeschaeftKommissionModel::class;
$this->externalTableName = "parlament_geschaeft_kommission";
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

$this->kommissionId = new \Nemundo\Model\Type\Id\IdType();
$this->kommissionId->fieldName = "kommission";
$this->kommissionId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->kommissionId->aliasFieldName = $this->kommissionId->tableName ."_".$this->kommissionId->fieldName;
$this->kommissionId->label = "Kommission";
$this->addType($this->kommissionId);

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
public function loadKommission() {
if ($this->kommission == null) {
$this->kommission = new \Parlament\Data\Kommission\KommissionExternalType(null, $this->parentFieldName . "_kommission");
$this->kommission->fieldName = "kommission";
$this->kommission->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->kommission->aliasFieldName = $this->kommission->tableName ."_".$this->kommission->fieldName;
$this->kommission->label = "Kommission";
$this->addType($this->kommission);
}
return $this;
}
}