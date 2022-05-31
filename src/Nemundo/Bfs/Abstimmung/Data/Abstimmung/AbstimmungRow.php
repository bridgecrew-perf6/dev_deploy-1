<?php
namespace Nemundo\Bfs\Abstimmung\Data\Abstimmung;
class AbstimmungRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var AbstimmungModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $abstimmungNumber;

/**
* @var int
*/
public $datumId;

/**
* @var \Nemundo\Bfs\Abstimmung\Data\Datum\DatumRow
*/
public $datum;

/**
* @var string
*/
public $abstimmung;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->abstimmungNumber = intval($this->getModelValue($model->abstimmungNumber));
$this->datumId = intval($this->getModelValue($model->datumId));
if ($model->datum !== null) {
$this->loadNemundoBfsAbstimmungDataDatumDatumdatumRow($model->datum);
}
$this->abstimmung = $this->getModelValue($model->abstimmung);
}
private function loadNemundoBfsAbstimmungDataDatumDatumdatumRow($model) {
$this->datum = new \Nemundo\Bfs\Abstimmung\Data\Datum\DatumRow($this->row, $model);
}
}