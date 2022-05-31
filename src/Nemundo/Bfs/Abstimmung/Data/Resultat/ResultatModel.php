<?php
namespace Nemundo\Bfs\Abstimmung\Data\Resultat;
class ResultatModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $abstimmungId;

/**
* @var \Nemundo\Bfs\Abstimmung\Data\Abstimmung\AbstimmungExternalType
*/
public $abstimmung;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $anzahlStimmzettel;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $anzahlStimmberechtigte;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $gueltigeStimmen;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $jaAbsolut;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $neinAbsolut;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $jaProzent;

/**
* @var \Nemundo\Model\Type\Number\DecimalNumberType
*/
public $stimmbeteiligungProzent;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $geoLevelId;

/**
* @var \Nemundo\Bfs\Abstimmung\Data\GeoLevel\GeoLevelExternalType
*/
public $geoLevel;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $gemeindeId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Gemeinde\GemeindeExternalType
*/
public $gemeinde;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $kantonId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonExternalType
*/
public $kanton;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $ausgezaehlt;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $geoNumber;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $bezirkId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkExternalType
*/
public $bezirk;

protected function loadModel() {
$this->tableName = "abstimmung_resultat";
$this->aliasTableName = "abstimmung_resultat";
$this->label = "Resultat";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "abstimmung_resultat";
$this->id->externalTableName = "abstimmung_resultat";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "abstimmung_resultat_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->abstimmungId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->abstimmungId->tableName = "abstimmung_resultat";
$this->abstimmungId->fieldName = "abstimmung";
$this->abstimmungId->aliasFieldName = "abstimmung_resultat_abstimmung";
$this->abstimmungId->label = "Abstimmung";
$this->abstimmungId->allowNullValue = false;

$this->anzahlStimmzettel = new \Nemundo\Model\Type\Number\NumberType($this);
$this->anzahlStimmzettel->tableName = "abstimmung_resultat";
$this->anzahlStimmzettel->externalTableName = "abstimmung_resultat";
$this->anzahlStimmzettel->fieldName = "anzahl_stimmzettel";
$this->anzahlStimmzettel->aliasFieldName = "abstimmung_resultat_anzahl_stimmzettel";
$this->anzahlStimmzettel->label = "Anzahl Stimmzettel";
$this->anzahlStimmzettel->allowNullValue = false;

$this->anzahlStimmberechtigte = new \Nemundo\Model\Type\Number\NumberType($this);
$this->anzahlStimmberechtigte->tableName = "abstimmung_resultat";
$this->anzahlStimmberechtigte->externalTableName = "abstimmung_resultat";
$this->anzahlStimmberechtigte->fieldName = "anzahl_stimmberechtigte";
$this->anzahlStimmberechtigte->aliasFieldName = "abstimmung_resultat_anzahl_stimmberechtigte";
$this->anzahlStimmberechtigte->label = "Anzahl Stimmberechtigte";
$this->anzahlStimmberechtigte->allowNullValue = false;

$this->gueltigeStimmen = new \Nemundo\Model\Type\Number\NumberType($this);
$this->gueltigeStimmen->tableName = "abstimmung_resultat";
$this->gueltigeStimmen->externalTableName = "abstimmung_resultat";
$this->gueltigeStimmen->fieldName = "gueltige_stimmen";
$this->gueltigeStimmen->aliasFieldName = "abstimmung_resultat_gueltige_stimmen";
$this->gueltigeStimmen->label = "Gueltige Stimmen";
$this->gueltigeStimmen->allowNullValue = false;

$this->jaAbsolut = new \Nemundo\Model\Type\Number\NumberType($this);
$this->jaAbsolut->tableName = "abstimmung_resultat";
$this->jaAbsolut->externalTableName = "abstimmung_resultat";
$this->jaAbsolut->fieldName = "ja_absolut";
$this->jaAbsolut->aliasFieldName = "abstimmung_resultat_ja_absolut";
$this->jaAbsolut->label = "Ja Stimmen";
$this->jaAbsolut->allowNullValue = false;

$this->neinAbsolut = new \Nemundo\Model\Type\Number\NumberType($this);
$this->neinAbsolut->tableName = "abstimmung_resultat";
$this->neinAbsolut->externalTableName = "abstimmung_resultat";
$this->neinAbsolut->fieldName = "nein_absolut";
$this->neinAbsolut->aliasFieldName = "abstimmung_resultat_nein_absolut";
$this->neinAbsolut->label = "Nein Stimmen";
$this->neinAbsolut->allowNullValue = false;

$this->jaProzent = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->jaProzent->tableName = "abstimmung_resultat";
$this->jaProzent->externalTableName = "abstimmung_resultat";
$this->jaProzent->fieldName = "ja_prozent";
$this->jaProzent->aliasFieldName = "abstimmung_resultat_ja_prozent";
$this->jaProzent->label = "Ja";
$this->jaProzent->allowNullValue = false;

$this->stimmbeteiligungProzent = new \Nemundo\Model\Type\Number\DecimalNumberType($this);
$this->stimmbeteiligungProzent->tableName = "abstimmung_resultat";
$this->stimmbeteiligungProzent->externalTableName = "abstimmung_resultat";
$this->stimmbeteiligungProzent->fieldName = "stimmbeteiligung_prozent";
$this->stimmbeteiligungProzent->aliasFieldName = "abstimmung_resultat_stimmbeteiligung_prozent";
$this->stimmbeteiligungProzent->label = "Stimmbeteiligung";
$this->stimmbeteiligungProzent->allowNullValue = false;

$this->geoLevelId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->geoLevelId->tableName = "abstimmung_resultat";
$this->geoLevelId->fieldName = "geo_level";
$this->geoLevelId->aliasFieldName = "abstimmung_resultat_geo_level";
$this->geoLevelId->label = "Geo Level";
$this->geoLevelId->allowNullValue = false;

$this->gemeindeId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->gemeindeId->tableName = "abstimmung_resultat";
$this->gemeindeId->fieldName = "gemeinde";
$this->gemeindeId->aliasFieldName = "abstimmung_resultat_gemeinde";
$this->gemeindeId->label = "Gemeinde";
$this->gemeindeId->allowNullValue = false;

$this->kantonId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->kantonId->tableName = "abstimmung_resultat";
$this->kantonId->fieldName = "kanton";
$this->kantonId->aliasFieldName = "abstimmung_resultat_kanton";
$this->kantonId->label = "Kanton";
$this->kantonId->allowNullValue = false;

$this->ausgezaehlt = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->ausgezaehlt->tableName = "abstimmung_resultat";
$this->ausgezaehlt->externalTableName = "abstimmung_resultat";
$this->ausgezaehlt->fieldName = "ausgezaehlt";
$this->ausgezaehlt->aliasFieldName = "abstimmung_resultat_ausgezaehlt";
$this->ausgezaehlt->label = "Ausgezählt";
$this->ausgezaehlt->allowNullValue = false;

$this->geoNumber = new \Nemundo\Model\Type\Number\NumberType($this);
$this->geoNumber->tableName = "abstimmung_resultat";
$this->geoNumber->externalTableName = "abstimmung_resultat";
$this->geoNumber->fieldName = "geo_number";
$this->geoNumber->aliasFieldName = "abstimmung_resultat_geo_number";
$this->geoNumber->label = "Geo Number";
$this->geoNumber->allowNullValue = false;

$this->bezirkId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->bezirkId->tableName = "abstimmung_resultat";
$this->bezirkId->fieldName = "bezirk";
$this->bezirkId->aliasFieldName = "abstimmung_resultat_bezirk";
$this->bezirkId->label = "Bezirk";
$this->bezirkId->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "abstimmung_ja_prozent";
$index->addType($this->abstimmungId);
$index->addType($this->jaProzent);

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "abstimmung_geo_number";
$index->addType($this->abstimmungId);
$index->addType($this->geoLevelId);
$index->addType($this->geoNumber);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "abstimmung_geo_level";
$index->addType($this->abstimmungId);
$index->addType($this->geoLevelId);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "abstimmung_kanton";
$index->addType($this->abstimmungId);
$index->addType($this->kantonId);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "abstimmung_gemeinde";
$index->addType($this->abstimmungId);
$index->addType($this->gemeindeId);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "abstimmung_bezirk";
$index->addType($this->abstimmungId);
$index->addType($this->bezirkId);

}
public function loadAbstimmung() {
if ($this->abstimmung == null) {
$this->abstimmung = new \Nemundo\Bfs\Abstimmung\Data\Abstimmung\AbstimmungExternalType($this, "abstimmung_resultat_abstimmung");
$this->abstimmung->tableName = "abstimmung_resultat";
$this->abstimmung->fieldName = "abstimmung";
$this->abstimmung->aliasFieldName = "abstimmung_resultat_abstimmung";
$this->abstimmung->label = "Abstimmung";
}
return $this;
}
public function loadGeoLevel() {
if ($this->geoLevel == null) {
$this->geoLevel = new \Nemundo\Bfs\Abstimmung\Data\GeoLevel\GeoLevelExternalType($this, "abstimmung_resultat_geo_level");
$this->geoLevel->tableName = "abstimmung_resultat";
$this->geoLevel->fieldName = "geo_level";
$this->geoLevel->aliasFieldName = "abstimmung_resultat_geo_level";
$this->geoLevel->label = "Geo Level";
}
return $this;
}
public function loadGemeinde() {
if ($this->gemeinde == null) {
$this->gemeinde = new \Nemundo\Bfs\Gemeinde\Data\Gemeinde\GemeindeExternalType($this, "abstimmung_resultat_gemeinde");
$this->gemeinde->tableName = "abstimmung_resultat";
$this->gemeinde->fieldName = "gemeinde";
$this->gemeinde->aliasFieldName = "abstimmung_resultat_gemeinde";
$this->gemeinde->label = "Gemeinde";
}
return $this;
}
public function loadKanton() {
if ($this->kanton == null) {
$this->kanton = new \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonExternalType($this, "abstimmung_resultat_kanton");
$this->kanton->tableName = "abstimmung_resultat";
$this->kanton->fieldName = "kanton";
$this->kanton->aliasFieldName = "abstimmung_resultat_kanton";
$this->kanton->label = "Kanton";
}
return $this;
}
public function loadBezirk() {
if ($this->bezirk == null) {
$this->bezirk = new \Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkExternalType($this, "abstimmung_resultat_bezirk");
$this->bezirk->tableName = "abstimmung_resultat";
$this->bezirk->fieldName = "bezirk";
$this->bezirk->aliasFieldName = "abstimmung_resultat_bezirk";
$this->bezirk->label = "Bezirk";
}
return $this;
}
}