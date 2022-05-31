<?php
namespace Parlament\Data\KommissionFunktion;
class KommissionFunktionExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $funktion;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = KommissionFunktionModel::class;
$this->externalTableName = "parlament_kommission_funktion";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->funktion = new \Nemundo\Model\Type\Text\TextType();
$this->funktion->fieldName = "funktion";
$this->funktion->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->funktion->externalTableName = $this->externalTableName;
$this->funktion->aliasFieldName = $this->funktion->tableName . "_" . $this->funktion->fieldName;
$this->funktion->label = "Funktion";
$this->addType($this->funktion);

}
}