<?php
namespace Nemundo\Bfs\Abstimmung\Data\Resultat;
class ResultatRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var ResultatModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $abstimmungId;

/**
* @var \Nemundo\Bfs\Abstimmung\Data\Abstimmung\AbstimmungRow
*/
public $abstimmung;

/**
* @var int
*/
public $anzahlStimmzettel;

/**
* @var int
*/
public $anzahlStimmberechtigte;

/**
* @var int
*/
public $gueltigeStimmen;

/**
* @var int
*/
public $jaAbsolut;

/**
* @var int
*/
public $neinAbsolut;

/**
* @var float
*/
public $jaProzent;

/**
* @var float
*/
public $stimmbeteiligungProzent;

/**
* @var int
*/
public $geoLevelId;

/**
* @var \Nemundo\Bfs\Abstimmung\Data\GeoLevel\GeoLevelRow
*/
public $geoLevel;

/**
* @var int
*/
public $gemeindeId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Gemeinde\GemeindeRow
*/
public $gemeinde;

/**
* @var int
*/
public $kantonId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonRow
*/
public $kanton;

/**
* @var bool
*/
public $ausgezaehlt;

/**
* @var int
*/
public $geoNumber;

/**
* @var int
*/
public $bezirkId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkRow
*/
public $bezirk;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->abstimmungId = intval($this->getModelValue($model->abstimmungId));
if ($model->abstimmung !== null) {
$this->loadNemundoBfsAbstimmungDataAbstimmungAbstimmungabstimmungRow($model->abstimmung);
}
$this->anzahlStimmzettel = intval($this->getModelValue($model->anzahlStimmzettel));
$this->anzahlStimmberechtigte = intval($this->getModelValue($model->anzahlStimmberechtigte));
$this->gueltigeStimmen = intval($this->getModelValue($model->gueltigeStimmen));
$this->jaAbsolut = intval($this->getModelValue($model->jaAbsolut));
$this->neinAbsolut = intval($this->getModelValue($model->neinAbsolut));
$this->jaProzent = floatval($this->getModelValue($model->jaProzent));
$this->stimmbeteiligungProzent = floatval($this->getModelValue($model->stimmbeteiligungProzent));
$this->geoLevelId = intval($this->getModelValue($model->geoLevelId));
if ($model->geoLevel !== null) {
$this->loadNemundoBfsAbstimmungDataGeoLevelGeoLevelgeoLevelRow($model->geoLevel);
}
$this->gemeindeId = intval($this->getModelValue($model->gemeindeId));
if ($model->gemeinde !== null) {
$this->loadNemundoBfsGemeindeDataGemeindeGemeindegemeindeRow($model->gemeinde);
}
$this->kantonId = intval($this->getModelValue($model->kantonId));
if ($model->kanton !== null) {
$this->loadNemundoBfsGemeindeDataKantonKantonkantonRow($model->kanton);
}
$this->ausgezaehlt = boolval($this->getModelValue($model->ausgezaehlt));
$this->geoNumber = intval($this->getModelValue($model->geoNumber));
$this->bezirkId = intval($this->getModelValue($model->bezirkId));
if ($model->bezirk !== null) {
$this->loadNemundoBfsGemeindeDataBezirkBezirkbezirkRow($model->bezirk);
}
}
private function loadNemundoBfsAbstimmungDataAbstimmungAbstimmungabstimmungRow($model) {
$this->abstimmung = new \Nemundo\Bfs\Abstimmung\Data\Abstimmung\AbstimmungRow($this->row, $model);
}
private function loadNemundoBfsAbstimmungDataGeoLevelGeoLevelgeoLevelRow($model) {
$this->geoLevel = new \Nemundo\Bfs\Abstimmung\Data\GeoLevel\GeoLevelRow($this->row, $model);
}
private function loadNemundoBfsGemeindeDataGemeindeGemeindegemeindeRow($model) {
$this->gemeinde = new \Nemundo\Bfs\Gemeinde\Data\Gemeinde\GemeindeRow($this->row, $model);
}
private function loadNemundoBfsGemeindeDataKantonKantonkantonRow($model) {
$this->kanton = new \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonRow($this->row, $model);
}
private function loadNemundoBfsGemeindeDataBezirkBezirkbezirkRow($model) {
$this->bezirk = new \Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkRow($this->row, $model);
}
}