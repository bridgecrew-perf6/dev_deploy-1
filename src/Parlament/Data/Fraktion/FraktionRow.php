<?php
namespace Parlament\Data\Fraktion;
class FraktionRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var FraktionModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $fraktion;

/**
* @var string
*/
public $abkuerzung;

/**
* @var bool
*/
public $aktiv;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->fraktion = $this->getModelValue($model->fraktion);
$this->abkuerzung = $this->getModelValue($model->abkuerzung);
$this->aktiv = boolval($this->getModelValue($model->aktiv));
}
}