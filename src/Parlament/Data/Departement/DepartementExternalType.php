<?php
namespace Parlament\Data\Departement;
class DepartementExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $departement;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $abk;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = DepartementModel::class;
$this->externalTableName = "parlament_departement";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->departement = new \Nemundo\Model\Type\Text\TextType();
$this->departement->fieldName = "departement";
$this->departement->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->departement->externalTableName = $this->externalTableName;
$this->departement->aliasFieldName = $this->departement->tableName . "_" . $this->departement->fieldName;
$this->departement->label = "Departement";
$this->addType($this->departement);

$this->abk = new \Nemundo\Model\Type\Text\TextType();
$this->abk->fieldName = "abk";
$this->abk->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->abk->externalTableName = $this->externalTableName;
$this->abk->aliasFieldName = $this->abk->tableName . "_" . $this->abk->fieldName;
$this->abk->label = "Abk";
$this->addType($this->abk);

}
}