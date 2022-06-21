<?php
namespace Parlament\Data\Fraktion;
class FraktionExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $fraktion;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $abkuerzung;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $aktiv;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = FraktionModel::class;
$this->externalTableName = "parlament_fraktion";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->fraktion = new \Nemundo\Model\Type\Text\TextType();
$this->fraktion->fieldName = "fraktion";
$this->fraktion->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->fraktion->externalTableName = $this->externalTableName;
$this->fraktion->aliasFieldName = $this->fraktion->tableName . "_" . $this->fraktion->fieldName;
$this->fraktion->label = "Fraktion";
$this->addType($this->fraktion);

$this->abkuerzung = new \Nemundo\Model\Type\Text\TextType();
$this->abkuerzung->fieldName = "abkuerzung";
$this->abkuerzung->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->abkuerzung->externalTableName = $this->externalTableName;
$this->abkuerzung->aliasFieldName = $this->abkuerzung->tableName . "_" . $this->abkuerzung->fieldName;
$this->abkuerzung->label = "Abkürzung";
$this->addType($this->abkuerzung);

$this->aktiv = new \Nemundo\Model\Type\Number\YesNoType();
$this->aktiv->fieldName = "aktiv";
$this->aktiv->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->aktiv->externalTableName = $this->externalTableName;
$this->aktiv->aliasFieldName = $this->aktiv->tableName . "_" . $this->aktiv->fieldName;
$this->aktiv->label = "Aktiv";
$this->addType($this->aktiv);

}
}