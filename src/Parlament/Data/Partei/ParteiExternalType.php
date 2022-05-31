<?php
namespace Parlament\Data\Partei;
class ParteiExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $abkuerzung;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $partei;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = ParteiModel::class;
$this->externalTableName = "parlament_partei";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->abkuerzung = new \Nemundo\Model\Type\Text\TextType();
$this->abkuerzung->fieldName = "abkuerzung";
$this->abkuerzung->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->abkuerzung->externalTableName = $this->externalTableName;
$this->abkuerzung->aliasFieldName = $this->abkuerzung->tableName . "_" . $this->abkuerzung->fieldName;
$this->abkuerzung->label = "Abkürzung";
$this->addType($this->abkuerzung);

$this->partei = new \Nemundo\Model\Type\Text\TextType();
$this->partei->fieldName = "partei";
$this->partei->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->partei->externalTableName = $this->externalTableName;
$this->partei->aliasFieldName = $this->partei->tableName . "_" . $this->partei->fieldName;
$this->partei->label = "Partei";
$this->addType($this->partei);

}
}