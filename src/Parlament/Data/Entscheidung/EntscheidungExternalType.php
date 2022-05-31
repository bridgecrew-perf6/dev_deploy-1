<?php
namespace Parlament\Data\Entscheidung;
class EntscheidungExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $entscheidung;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = EntscheidungModel::class;
$this->externalTableName = "parlament_entscheidung";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->entscheidung = new \Nemundo\Model\Type\Text\TextType();
$this->entscheidung->fieldName = "entscheidung";
$this->entscheidung->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->entscheidung->externalTableName = $this->externalTableName;
$this->entscheidung->aliasFieldName = $this->entscheidung->tableName . "_" . $this->entscheidung->fieldName;
$this->entscheidung->label = "Entscheidung";
$this->addType($this->entscheidung);

}
}