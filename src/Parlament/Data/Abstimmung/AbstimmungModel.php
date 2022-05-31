<?php
namespace Parlament\Data\Abstimmung;
class AbstimmungModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
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

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $jaBedeutung;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $neinBedeutung;

protected function loadModel() {
$this->tableName = "parlament_abstimmung";
$this->aliasTableName = "parlament_abstimmung";
$this->label = "Abstimmung";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_abstimmung";
$this->id->externalTableName = "parlament_abstimmung";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_abstimmung_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->abstimmung = new \Nemundo\Model\Type\Text\TextType($this);
$this->abstimmung->tableName = "parlament_abstimmung";
$this->abstimmung->externalTableName = "parlament_abstimmung";
$this->abstimmung->fieldName = "abstimmung";
$this->abstimmung->aliasFieldName = "parlament_abstimmung_abstimmung";
$this->abstimmung->label = "Abstimmung";
$this->abstimmung->allowNullValue = false;
$this->abstimmung->length = 255;

$this->datum = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->datum->tableName = "parlament_abstimmung";
$this->datum->externalTableName = "parlament_abstimmung";
$this->datum->fieldName = "datum";
$this->datum->aliasFieldName = "parlament_abstimmung_datum";
$this->datum->label = "Datum";
$this->datum->allowNullValue = false;

$this->geschaeftId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->geschaeftId->tableName = "parlament_abstimmung";
$this->geschaeftId->fieldName = "geschaeft";
$this->geschaeftId->aliasFieldName = "parlament_abstimmung_geschaeft";
$this->geschaeftId->label = "Geschäft";
$this->geschaeftId->allowNullValue = false;

$this->ja = new \Nemundo\Model\Type\Number\NumberType($this);
$this->ja->tableName = "parlament_abstimmung";
$this->ja->externalTableName = "parlament_abstimmung";
$this->ja->fieldName = "ja";
$this->ja->aliasFieldName = "parlament_abstimmung_ja";
$this->ja->label = "Ja";
$this->ja->allowNullValue = true;

$this->nein = new \Nemundo\Model\Type\Number\NumberType($this);
$this->nein->tableName = "parlament_abstimmung";
$this->nein->externalTableName = "parlament_abstimmung";
$this->nein->fieldName = "nein";
$this->nein->aliasFieldName = "parlament_abstimmung_nein";
$this->nein->label = "Nein";
$this->nein->allowNullValue = true;

$this->enthaltung = new \Nemundo\Model\Type\Number\NumberType($this);
$this->enthaltung->tableName = "parlament_abstimmung";
$this->enthaltung->externalTableName = "parlament_abstimmung";
$this->enthaltung->fieldName = "enthaltung";
$this->enthaltung->aliasFieldName = "parlament_abstimmung_enthaltung";
$this->enthaltung->label = "Enthaltung";
$this->enthaltung->allowNullValue = true;

$this->zeit = new \Nemundo\Model\Type\DateTime\TimeType($this);
$this->zeit->tableName = "parlament_abstimmung";
$this->zeit->externalTableName = "parlament_abstimmung";
$this->zeit->fieldName = "zeit";
$this->zeit->aliasFieldName = "parlament_abstimmung_zeit";
$this->zeit->label = "Zeit";
$this->zeit->allowNullValue = false;

$this->jaBedeutung = new \Nemundo\Model\Type\Text\TextType($this);
$this->jaBedeutung->tableName = "parlament_abstimmung";
$this->jaBedeutung->externalTableName = "parlament_abstimmung";
$this->jaBedeutung->fieldName = "ja_bedeutung";
$this->jaBedeutung->aliasFieldName = "parlament_abstimmung_ja_bedeutung";
$this->jaBedeutung->label = "Ja Bedeutung";
$this->jaBedeutung->allowNullValue = false;
$this->jaBedeutung->length = 255;

$this->neinBedeutung = new \Nemundo\Model\Type\Text\TextType($this);
$this->neinBedeutung->tableName = "parlament_abstimmung";
$this->neinBedeutung->externalTableName = "parlament_abstimmung";
$this->neinBedeutung->fieldName = "nein_bedeutung";
$this->neinBedeutung->aliasFieldName = "parlament_abstimmung_nein_bedeutung";
$this->neinBedeutung->label = "Nein Bedeutung";
$this->neinBedeutung->allowNullValue = false;
$this->neinBedeutung->length = 255;

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "datum";
$index->addType($this->datum);
$index->addType($this->zeit);

}
public function loadGeschaeft() {
if ($this->geschaeft == null) {
$this->geschaeft = new \Parlament\Data\Geschaeft\GeschaeftExternalType($this, "parlament_abstimmung_geschaeft");
$this->geschaeft->tableName = "parlament_abstimmung";
$this->geschaeft->fieldName = "geschaeft";
$this->geschaeft->aliasFieldName = "parlament_abstimmung_geschaeft";
$this->geschaeft->label = "Geschäft";
}
return $this;
}
}