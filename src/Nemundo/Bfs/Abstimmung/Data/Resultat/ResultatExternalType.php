<?php
namespace Nemundo\Bfs\Abstimmung\Data\Resultat;
class ResultatExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
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
* @var \Nemundo\Model\Type\Id\IdType
*/
public $geoLevelId;

/**
* @var \Nemundo\Bfs\Abstimmung\Data\GeoLevel\GeoLevelExternalType
*/
public $geoLevel;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $gemeindeId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Gemeinde\GemeindeExternalType
*/
public $gemeinde;

/**
* @var \Nemundo\Model\Type\Id\IdType
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
* @var \Nemundo\Model\Type\Id\IdType
*/
public $bezirkId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkExternalType
*/
public $bezirk;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = ResultatModel::class;
$this->externalTableName = "abstimmung_resultat";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->abstimmungId = new \Nemundo\Model\Type\Id\IdType();
$this->abstimmungId->fieldName = "abstimmung";
$this->abstimmungId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->abstimmungId->aliasFieldName = $this->abstimmungId->tableName ."_".$this->abstimmungId->fieldName;
$this->abstimmungId->label = "Abstimmung";
$this->addType($this->abstimmungId);

$this->anzahlStimmzettel = new \Nemundo\Model\Type\Number\NumberType();
$this->anzahlStimmzettel->fieldName = "anzahl_stimmzettel";
$this->anzahlStimmzettel->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->anzahlStimmzettel->externalTableName = $this->externalTableName;
$this->anzahlStimmzettel->aliasFieldName = $this->anzahlStimmzettel->tableName . "_" . $this->anzahlStimmzettel->fieldName;
$this->anzahlStimmzettel->label = "Anzahl Stimmzettel";
$this->addType($this->anzahlStimmzettel);

$this->anzahlStimmberechtigte = new \Nemundo\Model\Type\Number\NumberType();
$this->anzahlStimmberechtigte->fieldName = "anzahl_stimmberechtigte";
$this->anzahlStimmberechtigte->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->anzahlStimmberechtigte->externalTableName = $this->externalTableName;
$this->anzahlStimmberechtigte->aliasFieldName = $this->anzahlStimmberechtigte->tableName . "_" . $this->anzahlStimmberechtigte->fieldName;
$this->anzahlStimmberechtigte->label = "Anzahl Stimmberechtigte";
$this->addType($this->anzahlStimmberechtigte);

$this->gueltigeStimmen = new \Nemundo\Model\Type\Number\NumberType();
$this->gueltigeStimmen->fieldName = "gueltige_stimmen";
$this->gueltigeStimmen->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->gueltigeStimmen->externalTableName = $this->externalTableName;
$this->gueltigeStimmen->aliasFieldName = $this->gueltigeStimmen->tableName . "_" . $this->gueltigeStimmen->fieldName;
$this->gueltigeStimmen->label = "Gueltige Stimmen";
$this->addType($this->gueltigeStimmen);

$this->jaAbsolut = new \Nemundo\Model\Type\Number\NumberType();
$this->jaAbsolut->fieldName = "ja_absolut";
$this->jaAbsolut->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->jaAbsolut->externalTableName = $this->externalTableName;
$this->jaAbsolut->aliasFieldName = $this->jaAbsolut->tableName . "_" . $this->jaAbsolut->fieldName;
$this->jaAbsolut->label = "Ja Stimmen";
$this->addType($this->jaAbsolut);

$this->neinAbsolut = new \Nemundo\Model\Type\Number\NumberType();
$this->neinAbsolut->fieldName = "nein_absolut";
$this->neinAbsolut->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->neinAbsolut->externalTableName = $this->externalTableName;
$this->neinAbsolut->aliasFieldName = $this->neinAbsolut->tableName . "_" . $this->neinAbsolut->fieldName;
$this->neinAbsolut->label = "Nein Stimmen";
$this->addType($this->neinAbsolut);

$this->jaProzent = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->jaProzent->fieldName = "ja_prozent";
$this->jaProzent->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->jaProzent->externalTableName = $this->externalTableName;
$this->jaProzent->aliasFieldName = $this->jaProzent->tableName . "_" . $this->jaProzent->fieldName;
$this->jaProzent->label = "Ja";
$this->addType($this->jaProzent);

$this->stimmbeteiligungProzent = new \Nemundo\Model\Type\Number\DecimalNumberType();
$this->stimmbeteiligungProzent->fieldName = "stimmbeteiligung_prozent";
$this->stimmbeteiligungProzent->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->stimmbeteiligungProzent->externalTableName = $this->externalTableName;
$this->stimmbeteiligungProzent->aliasFieldName = $this->stimmbeteiligungProzent->tableName . "_" . $this->stimmbeteiligungProzent->fieldName;
$this->stimmbeteiligungProzent->label = "Stimmbeteiligung";
$this->addType($this->stimmbeteiligungProzent);

$this->geoLevelId = new \Nemundo\Model\Type\Id\IdType();
$this->geoLevelId->fieldName = "geo_level";
$this->geoLevelId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geoLevelId->aliasFieldName = $this->geoLevelId->tableName ."_".$this->geoLevelId->fieldName;
$this->geoLevelId->label = "Geo Level";
$this->addType($this->geoLevelId);

$this->gemeindeId = new \Nemundo\Model\Type\Id\IdType();
$this->gemeindeId->fieldName = "gemeinde";
$this->gemeindeId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->gemeindeId->aliasFieldName = $this->gemeindeId->tableName ."_".$this->gemeindeId->fieldName;
$this->gemeindeId->label = "Gemeinde";
$this->addType($this->gemeindeId);

$this->kantonId = new \Nemundo\Model\Type\Id\IdType();
$this->kantonId->fieldName = "kanton";
$this->kantonId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->kantonId->aliasFieldName = $this->kantonId->tableName ."_".$this->kantonId->fieldName;
$this->kantonId->label = "Kanton";
$this->addType($this->kantonId);

$this->ausgezaehlt = new \Nemundo\Model\Type\Number\YesNoType();
$this->ausgezaehlt->fieldName = "ausgezaehlt";
$this->ausgezaehlt->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->ausgezaehlt->externalTableName = $this->externalTableName;
$this->ausgezaehlt->aliasFieldName = $this->ausgezaehlt->tableName . "_" . $this->ausgezaehlt->fieldName;
$this->ausgezaehlt->label = "Ausgezählt";
$this->addType($this->ausgezaehlt);

$this->geoNumber = new \Nemundo\Model\Type\Number\NumberType();
$this->geoNumber->fieldName = "geo_number";
$this->geoNumber->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geoNumber->externalTableName = $this->externalTableName;
$this->geoNumber->aliasFieldName = $this->geoNumber->tableName . "_" . $this->geoNumber->fieldName;
$this->geoNumber->label = "Geo Number";
$this->addType($this->geoNumber);

$this->bezirkId = new \Nemundo\Model\Type\Id\IdType();
$this->bezirkId->fieldName = "bezirk";
$this->bezirkId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->bezirkId->aliasFieldName = $this->bezirkId->tableName ."_".$this->bezirkId->fieldName;
$this->bezirkId->label = "Bezirk";
$this->addType($this->bezirkId);

}
public function loadAbstimmung() {
if ($this->abstimmung == null) {
$this->abstimmung = new \Nemundo\Bfs\Abstimmung\Data\Abstimmung\AbstimmungExternalType(null, $this->parentFieldName . "_abstimmung");
$this->abstimmung->fieldName = "abstimmung";
$this->abstimmung->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->abstimmung->aliasFieldName = $this->abstimmung->tableName ."_".$this->abstimmung->fieldName;
$this->abstimmung->label = "Abstimmung";
$this->addType($this->abstimmung);
}
return $this;
}
public function loadGeoLevel() {
if ($this->geoLevel == null) {
$this->geoLevel = new \Nemundo\Bfs\Abstimmung\Data\GeoLevel\GeoLevelExternalType(null, $this->parentFieldName . "_geo_level");
$this->geoLevel->fieldName = "geo_level";
$this->geoLevel->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geoLevel->aliasFieldName = $this->geoLevel->tableName ."_".$this->geoLevel->fieldName;
$this->geoLevel->label = "Geo Level";
$this->addType($this->geoLevel);
}
return $this;
}
public function loadGemeinde() {
if ($this->gemeinde == null) {
$this->gemeinde = new \Nemundo\Bfs\Gemeinde\Data\Gemeinde\GemeindeExternalType(null, $this->parentFieldName . "_gemeinde");
$this->gemeinde->fieldName = "gemeinde";
$this->gemeinde->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->gemeinde->aliasFieldName = $this->gemeinde->tableName ."_".$this->gemeinde->fieldName;
$this->gemeinde->label = "Gemeinde";
$this->addType($this->gemeinde);
}
return $this;
}
public function loadKanton() {
if ($this->kanton == null) {
$this->kanton = new \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonExternalType(null, $this->parentFieldName . "_kanton");
$this->kanton->fieldName = "kanton";
$this->kanton->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->kanton->aliasFieldName = $this->kanton->tableName ."_".$this->kanton->fieldName;
$this->kanton->label = "Kanton";
$this->addType($this->kanton);
}
return $this;
}
public function loadBezirk() {
if ($this->bezirk == null) {
$this->bezirk = new \Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkExternalType(null, $this->parentFieldName . "_bezirk");
$this->bezirk->fieldName = "bezirk";
$this->bezirk->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->bezirk->aliasFieldName = $this->bezirk->tableName ."_".$this->bezirk->fieldName;
$this->bezirk->label = "Bezirk";
$this->addType($this->bezirk);
}
return $this;
}
}