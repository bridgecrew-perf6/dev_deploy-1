<?php
namespace Parlament\Data\Departement;
class DepartementModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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

protected function loadModel() {
$this->tableName = "parlament_departement";
$this->aliasTableName = "parlament_departement";
$this->label = "Departement";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_departement";
$this->id->externalTableName = "parlament_departement";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_departement_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->departement = new \Nemundo\Model\Type\Text\TextType($this);
$this->departement->tableName = "parlament_departement";
$this->departement->externalTableName = "parlament_departement";
$this->departement->fieldName = "departement";
$this->departement->aliasFieldName = "parlament_departement_departement";
$this->departement->label = "Departement";
$this->departement->allowNullValue = false;
$this->departement->length = 255;

$this->abk = new \Nemundo\Model\Type\Text\TextType($this);
$this->abk->tableName = "parlament_departement";
$this->abk->externalTableName = "parlament_departement";
$this->abk->fieldName = "abk";
$this->abk->aliasFieldName = "parlament_departement_abk";
$this->abk->label = "Abk";
$this->abk->allowNullValue = false;
$this->abk->length = 10;

}
}