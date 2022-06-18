<?php
namespace Nemundo\Meteoschweiz\Data\CmsMesswertStation;
class CmsMesswertStationRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var CmsMesswertStationModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $stationId;

/**
* @var \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationRow
*/
public $station;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->stationId = intval($this->getModelValue($model->stationId));
if ($model->station !== null) {
$this->loadNemundoMeteoschweizDataMesswertStationMesswertStationstationRow($model->station);
}
}
private function loadNemundoMeteoschweizDataMesswertStationMesswertStationstationRow($model) {
$this->station = new \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationRow($this->row, $model);
}
}