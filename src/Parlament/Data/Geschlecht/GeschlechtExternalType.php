<?php
namespace Parlament\Data\Geschlecht;
class GeschlechtExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $geschlecht;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = GeschlechtModel::class;
$this->externalTableName = "parlament_geschlecht";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->geschlecht = new \Nemundo\Model\Type\Text\TextType();
$this->geschlecht->fieldName = "geschlecht";
$this->geschlecht->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geschlecht->externalTableName = $this->externalTableName;
$this->geschlecht->aliasFieldName = $this->geschlecht->tableName . "_" . $this->geschlecht->fieldName;
$this->geschlecht->label = "Geschlecht";
$this->addType($this->geschlecht);

}
}