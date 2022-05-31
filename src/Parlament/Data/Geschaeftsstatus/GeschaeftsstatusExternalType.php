<?php
namespace Parlament\Data\Geschaeftsstatus;
class GeschaeftsstatusExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $geschaeftsstatus;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = GeschaeftsstatusModel::class;
$this->externalTableName = "parlament_geschaeftsstatus";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->geschaeftsstatus = new \Nemundo\Model\Type\Text\TextType();
$this->geschaeftsstatus->fieldName = "geschaeftsstatus";
$this->geschaeftsstatus->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geschaeftsstatus->externalTableName = $this->externalTableName;
$this->geschaeftsstatus->aliasFieldName = $this->geschaeftsstatus->tableName . "_" . $this->geschaeftsstatus->fieldName;
$this->geschaeftsstatus->label = "Geschäftsstatus";
$this->addType($this->geschaeftsstatus);

}
}