<?php
namespace Nemundo\Bfs\Abstimmung\Data\Resultat;
class Resultat extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var ResultatModel
*/
protected $model;

/**
* @var string
*/
public $abstimmungId;

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
* @var string
*/
public $geoLevelId;

/**
* @var string
*/
public $gemeindeId;

/**
* @var string
*/
public $kantonId;

/**
* @var bool
*/
public $ausgezaehlt;

/**
* @var int
*/
public $geoNumber;

/**
* @var string
*/
public $bezirkId;

public function __construct() {
parent::__construct();
$this->model = new ResultatModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->abstimmungId, $this->abstimmungId);
$this->typeValueList->setModelValue($this->model->anzahlStimmzettel, $this->anzahlStimmzettel);
$this->typeValueList->setModelValue($this->model->anzahlStimmberechtigte, $this->anzahlStimmberechtigte);
$this->typeValueList->setModelValue($this->model->gueltigeStimmen, $this->gueltigeStimmen);
$this->typeValueList->setModelValue($this->model->jaAbsolut, $this->jaAbsolut);
$this->typeValueList->setModelValue($this->model->neinAbsolut, $this->neinAbsolut);
if (!is_null($this->jaProzent)) $this->jaProzent = str_replace(",", ".", $this->jaProzent);
$this->typeValueList->setModelValue($this->model->jaProzent, $this->jaProzent);
if (!is_null($this->stimmbeteiligungProzent)) $this->stimmbeteiligungProzent = str_replace(",", ".", $this->stimmbeteiligungProzent);
$this->typeValueList->setModelValue($this->model->stimmbeteiligungProzent, $this->stimmbeteiligungProzent);
$this->typeValueList->setModelValue($this->model->geoLevelId, $this->geoLevelId);
$this->typeValueList->setModelValue($this->model->gemeindeId, $this->gemeindeId);
$this->typeValueList->setModelValue($this->model->kantonId, $this->kantonId);
$this->typeValueList->setModelValue($this->model->ausgezaehlt, $this->ausgezaehlt);
$this->typeValueList->setModelValue($this->model->geoNumber, $this->geoNumber);
$this->typeValueList->setModelValue($this->model->bezirkId, $this->bezirkId);
$id = parent::save();
return $id;
}
}