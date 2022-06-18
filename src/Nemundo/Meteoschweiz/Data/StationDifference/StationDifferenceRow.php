<?php
namespace Nemundo\Meteoschweiz\Data\StationDifference;
class StationDifferenceRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var StationDifferenceModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $station1Id;

/**
* @var \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationRow
*/
public $station1;

/**
* @var int
*/
public $station2Id;

/**
* @var \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationRow
*/
public $station2;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->station1Id = intval($this->getModelValue($model->station1Id));
if ($model->station1 !== null) {
$this->loadNemundoMeteoschweizDataMesswertStationMesswertStationstation1Row($model->station1);
}
$this->station2Id = intval($this->getModelValue($model->station2Id));
if ($model->station2 !== null) {
$this->loadNemundoMeteoschweizDataMesswertStationMesswertStationstation2Row($model->station2);
}
}
private function loadNemundoMeteoschweizDataMesswertStationMesswertStationstation1Row($model) {
$this->station1 = new \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationRow($this->row, $model);
}
private function loadNemundoMeteoschweizDataMesswertStationMesswertStationstation2Row($model) {
$this->station2 = new \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationRow($this->row, $model);
}
}