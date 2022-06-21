<?php
namespace Parlament\Data\KommissionFunktion;
class KommissionFunktionRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var KommissionFunktionModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $funktion;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->funktion = $this->getModelValue($model->funktion);
}
}