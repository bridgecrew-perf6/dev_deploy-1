<?php
namespace Parlament\Data\Ratsmitglied;
class RatsmitgliedRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var RatsmitgliedModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $name;

/**
* @var string
*/
public $vorname;

/**
* @var int
*/
public $kantonId;

/**
* @var \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonRow
*/
public $kanton;

/**
* @var int
*/
public $ratId;

/**
* @var \Parlament\Data\Rat\RatRow
*/
public $rat;

/**
* @var int
*/
public $fraktionId;

/**
* @var \Parlament\Row\FraktionCustomRow
*/
public $fraktion;

/**
* @var string
*/
public $biographieUrl;

/**
* @var string
*/
public $homepage;

/**
* @var \Nemundo\Model\Reader\Property\File\ImageReaderProperty
*/
public $bild;

/**
* @var bool
*/
public $hasHomepage;

/**
* @var int
*/
public $parteiId;

/**
* @var \Parlament\Data\Partei\ParteiRow
*/
public $partei;

/**
* @var bool
*/
public $aktiv;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $geburtstag;

/**
* @var int
*/
public $geschlechtId;

/**
* @var \Parlament\Data\Geschlecht\GeschlechtRow
*/
public $geschlecht;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->name = $this->getModelValue($model->name);
$this->vorname = $this->getModelValue($model->vorname);
$this->kantonId = intval($this->getModelValue($model->kantonId));
if ($model->kanton !== null) {
$this->loadNemundoBfsGemeindeDataKantonKantonkantonRow($model->kanton);
}
$this->ratId = intval($this->getModelValue($model->ratId));
if ($model->rat !== null) {
$this->loadParlamentDataRatRatratRow($model->rat);
}
$this->fraktionId = intval($this->getModelValue($model->fraktionId));
if ($model->fraktion !== null) {
$this->loadParlamentDataFraktionFraktionfraktionRow($model->fraktion);
}
$this->biographieUrl = $this->getModelValue($model->biographieUrl);
$this->homepage = $this->getModelValue($model->homepage);
$this->bild = new \Nemundo\Model\Reader\Property\File\ImageReaderProperty($row, $model->bild);
$this->hasHomepage = boolval($this->getModelValue($model->hasHomepage));
$this->parteiId = intval($this->getModelValue($model->parteiId));
if ($model->partei !== null) {
$this->loadParlamentDataParteiParteiparteiRow($model->partei);
}
$this->aktiv = boolval($this->getModelValue($model->aktiv));
$value = $this->getModelValue($model->geburtstag);
if ($value !== "0000-00-00") {
$this->geburtstag = new \Nemundo\Core\Type\DateTime\Date($this->getModelValue($model->geburtstag));
}
$this->geschlechtId = intval($this->getModelValue($model->geschlechtId));
if ($model->geschlecht !== null) {
$this->loadParlamentDataGeschlechtGeschlechtgeschlechtRow($model->geschlecht);
}
}
private function loadNemundoBfsGemeindeDataKantonKantonkantonRow($model) {
$this->kanton = new \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonRow($this->row, $model);
}
private function loadParlamentDataRatRatratRow($model) {
$this->rat = new \Parlament\Data\Rat\RatRow($this->row, $model);
}
private function loadParlamentDataFraktionFraktionfraktionRow($model) {
$this->fraktion = new \Parlament\Row\FraktionCustomRow($this->row, $model);
}
private function loadParlamentDataParteiParteiparteiRow($model) {
$this->partei = new \Parlament\Data\Partei\ParteiRow($this->row, $model);
}
private function loadParlamentDataGeschlechtGeschlechtgeschlechtRow($model) {
$this->geschlecht = new \Parlament\Data\Geschlecht\GeschlechtRow($this->row, $model);
}
}