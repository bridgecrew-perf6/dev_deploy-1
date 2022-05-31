<?php
namespace Parlament\Data\Abstimmung;
class AbstimmungExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $abstimmung;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $datum;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $geschaeftId;

/**
* @var \Parlament\Data\Geschaeft\GeschaeftExternalType
*/
public $geschaeft;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $ja;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $nein;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $enthaltung;

/**
* @var \Nemundo\Model\Type\DateTime\TimeType
*/
public $zeit;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = AbstimmungModel::class;
$this->externalTableName = "parlament_abstimmung";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->abstimmung = new \Nemundo\Model\Type\Text\TextType();
$this->abstimmung->fieldName = "abstimmung";
$this->abstimmung->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->abstimmung->externalTableName = $this->externalTableName;
$this->abstimmung->aliasFieldName = $this->abstimmung->tableName . "_" . $this->abstimmung->fieldName;
$this->abstimmung->label = "Abstimmung";
$this->addType($this->abstimmung);

$this->datum = new \Nemundo\Model\Type\DateTime\DateType();
$this->datum->fieldName = "datum";
$this->datum->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->datum->externalTableName = $this->externalTableName;
$this->datum->aliasFieldName = $this->datum->tableName . "_" . $this->datum->fieldName;
$this->datum->label = "Datum";
$this->addType($this->datum);

$this->geschaeftId = new \Nemundo\Model\Type\Id\IdType();
$this->geschaeftId->fieldName = "geschaeft";
$this->geschaeftId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geschaeftId->aliasFieldName = $this->geschaeftId->tableName ."_".$this->geschaeftId->fieldName;
$this->geschaeftId->label = "Geschäft";
$this->addType($this->geschaeftId);

$this->ja = new \Nemundo\Model\Type\Number\NumberType();
$this->ja->fieldName = "ja";
$this->ja->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->ja->externalTableName = $this->externalTableName;
$this->ja->aliasFieldName = $this->ja->tableName . "_" . $this->ja->fieldName;
$this->ja->label = "Ja";
$this->addType($this->ja);

$this->nein = new \Nemundo\Model\Type\Number\NumberType();
$this->nein->fieldName = "nein";
$this->nein->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->nein->externalTableName = $this->externalTableName;
$this->nein->aliasFieldName = $this->nein->tableName . "_" . $this->nein->fieldName;
$this->nein->label = "Nein";
$this->addType($this->nein);

$this->enthaltung = new \Nemundo\Model\Type\Number\NumberType();
$this->enthaltung->fieldName = "enthaltung";
$this->enthaltung->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->enthaltung->externalTableName = $this->externalTableName;
$this->enthaltung->aliasFieldName = $this->enthaltung->tableName . "_" . $this->enthaltung->fieldName;
$this->enthaltung->label = "Enthaltung";
$this->addType($this->enthaltung);

$this->zeit = new \Nemundo\Model\Type\DateTime\TimeType();
$this->zeit->fieldName = "zeit";
$this->zeit->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->zeit->externalTableName = $this->externalTableName;
$this->zeit->aliasFieldName = $this->zeit->tableName . "_" . $this->zeit->fieldName;
$this->zeit->label = "Zeit";
$this->addType($this->zeit);

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
}