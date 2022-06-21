<?php
namespace Parlament\Data\Geschaeftstyp;
class GeschaeftstypExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $geschaeftstyp;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $abk;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = GeschaeftstypModel::class;
$this->externalTableName = "parlament_geschaeftstyp";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->geschaeftstyp = new \Nemundo\Model\Type\Text\TextType();
$this->geschaeftstyp->fieldName = "geschaeftstyp";
$this->geschaeftstyp->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geschaeftstyp->externalTableName = $this->externalTableName;
$this->geschaeftstyp->aliasFieldName = $this->geschaeftstyp->tableName . "_" . $this->geschaeftstyp->fieldName;
$this->geschaeftstyp->label = "Geschäftstyp";
$this->addType($this->geschaeftstyp);

$this->abk = new \Nemundo\Model\Type\Text\TextType();
$this->abk->fieldName = "abk";
$this->abk->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->abk->externalTableName = $this->externalTableName;
$this->abk->aliasFieldName = $this->abk->tableName . "_" . $this->abk->fieldName;
$this->abk->label = "Abk";
$this->addType($this->abk);

}
}