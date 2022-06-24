<?php
namespace Dev\App\Wetzikon\Data\PoiBild;
class PoiBildRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var PoiBildModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $poiId;

/**
* @var \Dev\App\Wetzikon\Data\Poi\PoiRow
*/
public $poi;

/**
* @var \Nemundo\Model\Reader\Property\File\ImageReaderProperty
*/
public $bild;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->poiId = intval($this->getModelValue($model->poiId));
if ($model->poi !== null) {
$this->loadDevAppWetzikonDataPoiPoipoiRow($model->poi);
}
$this->bild = new \Nemundo\Model\Reader\Property\File\ImageReaderProperty($row, $model->bild);
}
private function loadDevAppWetzikonDataPoiPoipoiRow($model) {
$this->poi = new \Dev\App\Wetzikon\Data\Poi\PoiRow($this->row, $model);
}
}